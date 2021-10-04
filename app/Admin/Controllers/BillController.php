<?php

namespace App\Admin\Controllers;

use App\Models\Bill;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\User;
use App\Models\Product;
class BillController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Bill';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Bill());

        $grid->column('id', __('ID'));
        $grid->column('users.name');
        $grid->billdetails()->display(function ($billdetails) {
            $count = count($billdetails);
            return "<span class='label label-success'>{$count}</span>";
        });
        $grid->column('subtotal', __('Subtotal'));
        $grid->column('created_at', __('Created at'));
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
        $show = new Show(Bill::findOrFail($id));

        $show->field('id', __('Id'));
        $show->user('User', function ($user) {
            $user->name();
        });
        $show->billdetails('', function ($billdetails) {
            $billdetails->products()->name();
            $billdetails->quantity();
            $billdetails->products()->price();
        });
        $show->field('subtotal', __('Subtotal'));
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
        $form = new Form(new Bill());

        $form->number('user_id', __('User id'));
        $form->text('subtotal', __('Subtotal'));

        return $form;
    }
}
