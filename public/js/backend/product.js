var ProductController = {
    /**
     * Get total item
     *
     * @returns {jQuery}
     */
    getTotalRow: function () {
        return $('.model-product-option-list').find('.model-product-option-info').length;
    },

    /**
     * Change tag name, tag id, tag class after add new item
     *
     * @param selector
     * @param prefix
     * @param newName
     */
    replacePrefix: function (selector, prefix, newName) {
        $(selector).find('input, select, div, tr, button, label, textarea').each(function () {
            var pattern = /_prefix_/gm;

            // change name
            var name = $(this).attr('name');
            if (name !== undefined && name.length > 0) {
                name = name.replace('[' + prefix + ']', '[' + newName + ']');
                $(this).attr('name', name);
            }
            // change class
            var className = $(this).attr('class');
            if (className !== undefined && className.length > 0) {
                className = className.replace(pattern, newName);
                $(this).attr('class', className);
            }
            // change id
            var idName = $(this).attr('id');
            if (idName !== undefined && idName.length > 0) {
                idName = idName.replace(pattern, newName);
                $(this).attr('id', idName);
            }
            // change data id
            var dataId = $(this).data('id');
            if (dataId !== undefined && dataId.length > 0) {
                dataId = dataId.replace(pattern, newName);
                $(this).attr('data-id', dataId);
            }
            // change data index
            var dataIndex = $(this).data('index');
            if (dataIndex !== undefined && dataIndex.length > 0) {
                dataIndex = dataIndex.replace(pattern, newName);
                $(this).attr('data-index', dataIndex);
            }

            // change for
            var _for = $(this).attr('for');
            if (_for !== undefined && _for.length > 0) {
                _for = _for.replace(pattern, newName);
                $(this).attr('for', _for);
            }

            // change name of input file
            name = $(this).attr('name');
            if (name !== undefined && name.length > 0 && name.startsWith('_file_name')) {
                name = name.replace(pattern, newName);
                $(this).attr('name', name);

                var value = $(this).attr('value');
                value = value.replace(pattern, newName);
                $(this).attr('value', value);
            }
        });
    },

    /**
     * Bind event for delete button
     */
    bindDeleteBtn: function () {
        var total = ProductController.getTotalRow();
        if (total <= 1) {
            $('.model-product-option-list .model-product-option-info .delete-row').not(':first').addClass('hide');
        } else {
            $('.model-product-option-list .model-product-option-info .delete-row').not(':first').removeClass('hide');
        }
        setTimeout(function () {
            $('.model-product-option-list .model-product-option-info').each(function (e) {
                $(this).find('input,select,hidden').each(function (ex) {
                    var name = $(this).attr('name');
                    name = name.replace(/\[[0-9]*/, '[' + e);
                    $(this).attr('name', name);
                })
            })
        }, 500)
    },

    /**
     * Add new item with empty data
     *
     * @param input
     */
    addNewProductOption: function (input) {
        var total = ProductController.getTotalRow(),
            prefix = '_prefix_',
            newName = total,
            html = $('#model_product_option').html();

        // append new model
        $('.model-product-option-list').append(html);
        // change panel heading
        $('.model-product-option-list .new-model-product-option:last').find('.panel_heading').empty().text(total + 1);
        $('.model_shop_media_template .new-model-product-option').find('.panel_heading').empty().text(prefix);
        // change tag name, id, class
        ProductController.replacePrefix('.model-product-option-list .new-model-product-option:last', prefix, newName);
        ProductController.bindDeleteBtn();

        $(".input-image2").off('change').on('change', function () {
            previewFile2(this);
        });
    },

    /**
     * Remove current item
     *
     * @param input
     * @returns {boolean}
     */
    removeProductOption: function (input) {
        if (ProductController.getTotalRow() <= 1) {
            return false;
        }
        // delete old data
        var id = $(input).closest('.model-product-option-info').attr('data-id');
        if (id) {
            // push delete id to form
            var deleteIds = $('#delete_ids').val();
            deleteIds = deleteIds ? deleteIds.split(',') : [];
            deleteIds.push(id);
            deleteIds = deleteIds.join(',');
            $('#delete_ids').val(deleteIds);
        }
        // delete ignore search spot
        var ignoreId = $(input).closest('.form-group').find('.shopMedias_shop_id').val();
        // delete row
        $(input).closest('.new-model-product-option').remove();
        $(input).closest('.model-product-option-info').remove();
        // update panel heading
        $('.panel_heading').each(function (k, v) {
            $(this).empty().text(k + 1);
        });

        var length_block = $('.model-product-option-info').length - 1,
            i = 0

        $('.model-product-option-info').find('label.label_upload').each(function() {
            var forName = $(this).attr('for'),
                number = forName.substr(-11, 1)

            forName = forName.replace(number, i)
            $(this).attr('for', forName)

            if(i < length_block - 1) {
                i = i + 1
            } else {
                return false
            }
        })
    },
};