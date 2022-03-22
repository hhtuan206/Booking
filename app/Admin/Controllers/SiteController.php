<?php

namespace App\Admin\Controllers;

use App\Models\Site;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SiteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Site';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Site());
        $grid->column('address', __('Address'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('logo', __('Image'))->image('', 100, 100);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->actions(function ($actions) {
            $actions->disableDelete();

        });
        $grid->disableCreation();
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
        $show = new Show(Site::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('phone', __('phone'));
        $show->field('email', __('email'));
        $show->field('logo', __('logo'))->image('',150,50);
        $show->field('address', __('address'));
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
        $form = new Form(new Site());
        $form->image('logo')->value('logo.png');
        $form->mobile('phone')->rules('required');
        $form->email('email')->rules('required');
        $form->textarea('address')->rules('required');
        return $form;
    }
}
