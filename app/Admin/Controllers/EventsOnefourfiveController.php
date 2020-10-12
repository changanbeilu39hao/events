<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\EventsOnefourfive;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class EventsOnefourfiveController extends AdminController
{
    protected $title='四川十四五献策';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new EventsOnefourfive(), function (Grid $grid) {
            
            $grid->column('name');
            $grid->column('tel');
            $grid->column('category');
            $grid->column('content');
            $grid->column('email');
            $grid->column('created_at');
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
                        // 禁用
            $grid->disableCreateButton();
            $grid->disableFilter();
            $grid->disableViewButton();
            $grid->disableEditButton();

            $titles = [
                'id' => '排序',
                'name' => '姓名', 
                'tel'=>'电话', 
                'category' => '建言主题',
                'content'=>'建言内容',
                'email' => '邮箱',
                'created_at' => '创建时间'
            ];
            $grid->export($titles)->filename('四川十四五献策数据');

            $grid->model()->orderBy('created_at', 'desc');
            
            
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new EventsOnefourfive(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('tel');
            $show->field('category');
            $show->field('content');
            $show->field('email');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new EventsOnefourfive(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('tel');
            $form->text('category');
            $form->text('content');
            $form->text('email');
        });
    }
}
