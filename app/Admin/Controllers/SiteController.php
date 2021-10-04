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

        $grid->column('id', __('Id'));
        $grid->column('content', __('Content'));
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
        $show = new Show(Site::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('content', __('Content'));
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

        $form->embeds('content',__('Content'), function ($form) {
            $form->image('Logo')->value('logo.png');
            $form->mobile('Phone')->rules('required');
            $form->email('Email')->rules('required');
            $form->textarea('Address')->rules('required');
        });

       return $form;
   }
}
