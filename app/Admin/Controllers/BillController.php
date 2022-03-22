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
        $grid->column('shipment');
        $grid->column('status');
        $grid->details()->display(function ($detail) {
            $count = count($detail);
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
        $show->field('shipment', __('Shipment'));
        $show->field('status', __('Status'));
        $show->users('User', function ($user) {
           $user->name();
           $user->email();
           $user->phone();
           $user->address();
        });

        $show->details('Detail', function ($detail) {
            $detail->product()->name();
            $detail->product()->image()->image('', 100, 100);;
            $detail->quantity();
            $detail->product()->price();
            $detail->disableCreation();
            $detail->disableExport();
            $detail->disableFilter();
        });
        $show->field('subtotal', __('Subtotal'));
        $show->field('created_at', __('Created at'));

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

        $form->select('user_id', "User")->options(User::all()->pluck('name', 'id'));
        $form->radio("shipment", "Shipment")->options(['cod' => 'COD', 'banking'=> 'BANKING'])->default('COD');
        $form->radio('status', "Status")->options(['Đang chờ' => 'Đang chờ', 'Đang chuẩn bị hàng'=> 'Đang chuẩn bị hàng','Đang vận chuyển'=> 'Đang vận chuyển','Thành công'=> 'Thành công'])->default('Đang chờ');
        $form->hasMany('details', function (Form\NestedForm $form) {
            $form->select('product_id', "Product")->options(Product::all()->pluck('name', 'id'));
            $form->number('quantity', "Quantity");
        });

        $form->text('subtotal', __('Subtotal'));

        return $form;
    }
}
