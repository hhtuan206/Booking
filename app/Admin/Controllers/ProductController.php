<?php

namespace App\Admin\Controllers;

use App\Models\Author;
use App\Models\Nxb;
use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Category;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());
        $grid->quickSearch('name');
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('price', __('Price'));
        $grid->column('stock', __('Stock'));
        $grid->column('image', __('Image'))->image('', 100, 100);
        $grid->categories()->display(function ($categories) {
            $categories = array_map(function ($category) {
                return "<span class='label label-success'>{$category['name']}</span>";
            }, $categories);
            return join('&nbsp;', $categories);
        });
        $grid->authors()->display(function ($authors) {

            $authors = array_map(function ($author) {
                return "<span class='label label-success'>{$author['name']}</span>";
            }, $authors);
            return join('&nbsp;', $authors);
        });
        $grid->nxbs()->display(function ($nxbs) {

            $nxbs = array_map(function ($nxb) {
                return "<span class='label label-success'>{$nxb['name']}</span>";
            }, $nxbs);
            return join('&nbsp;', $nxbs);
        });
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('price', __('Price'));
        $show->field('stock', __('Stock'));
        $show->field('image', __('Image'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->text('name', __('Name'));
        $form->ckeditor('description', __('Description'));
        $form->currency('price', __('Price'))->symbol('$');
        $form->number('stock', __('Stock'));
        $form->image('image', __('Image'));
        $form->multipleSelect('categories', 'Select Category')->options(Category::all()->pluck('name', 'id'));
        $form->multipleSelect('authors', 'Select Author')->options(Author::all()->pluck('name', 'id'));
        $form->multipleSelect('nxbs', 'Select Nxb')->options(Nxb::all()->pluck('name', 'id'));
        return $form;
    }


}
