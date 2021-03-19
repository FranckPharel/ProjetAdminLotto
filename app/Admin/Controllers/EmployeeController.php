<?php

namespace App\Admin\Controllers;

use App\models\Employee;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EmployeeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Employee';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Employee);

        $grid->column('id', __('Id'))->sortable();
        $grid->column('Firstname', __('Full Name'));

        $grid->column('Department.title', __('Department'));
        $grid->column('Address', __('Address'));
        $grid->column('PrimaryPhoneNumber', __('Phone'));
        $grid->column('SecurityCode', __('SecurityCode'));
        $grid->column('Email', __('Email'));

        $grid->column('IsManager', __('IsManager'));
      //  $grid->column('created_at', __('Created at'));
       // $grid->column('updated_at', __('Updated at'));
        //$grid->column('Partner_id', __('Partner id'));
        //$grid->column('Station_id', __('Station id'));
       // $grid->column('Department_id', __('Department id'));
       // $grid->column('Lastname', __('Lastname'));
        //$grid->column('SecondaryPhoneNumber', __('SecondaryPhoneNumber'));
        //$grid->column('Skype', __('Skype'));
        //$grid->column('BornOn', __('BornOn'));
        //$grid->column('BaseSalary', __('BaseSalary'));
        //$grid->column('IsMale', __('IsMale'));
        //$grid->column('IsBlocked', __('IsBlocked'));
        //$grid->column('IsDeleted', __('IsDeleted'));
        //$grid->column('RegisteredOn', __('RegisteredOn'));
        //$grid->column('CreatedOn', __('CreatedOn'));
        //$grid->column('UpdateOn', __('UpdateOn'));
       // $grid->column('Cashier_id', __('Cashier id'));
       // $grid->column('Activities', __('Activities'));

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
        $show = new Show(Employee::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('Partner_id', __('Partner id'));
        $show->field('Station_id', __('Station id'));
        $show->field('Department_id', __('Department id'));
        $show->field('Address', __('Address'));
        $show->field('Firstname', __('Firstname'));
        $show->field('Lastname', __('Lastname'));
        $show->field('PrimaryPhoneNumber', __('PrimaryPhoneNumber'));
        $show->field('SecondaryPhoneNumber', __('SecondaryPhoneNumber'));
        $show->field('Skype', __('Skype'));
        $show->field('SecurityCode', __('SecurityCode'));
        $show->field('Email', __('Email'));
        $show->field('BornOn', __('BornOn'));
        $show->field('BaseSalary', __('BaseSalary'));
        $show->field('IsMale', __('IsMale'));
        $show->field('IsBlocked', __('IsBlocked'));
        $show->field('IsDeleted', __('IsDeleted'));
        $show->field('RegisteredOn', __('RegisteredOn'));
        $show->field('CreatedOn', __('CreatedOn'));
        $show->field('UpdateOn', __('UpdateOn'));
        $show->field('Cashier_id', __('Cashier id'));
        $show->field('IsManager', __('IsManager'));
        $show->field('Activities', __('Activities'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Employee);

        $form->number('Partner_id', __('Partner id'));
        $form->number('Station_id', __('Station id'));
        $form->number('Department_id', __('Department id'));
        $form->text('Address', __('Address'));
        $form->text('Firstname', __('Firstname'));
        $form->text('Lastname', __('Lastname'));
        $form->text('PrimaryPhoneNumber', __('PrimaryPhoneNumber'));
        $form->text('SecondaryPhoneNumber', __('SecondaryPhoneNumber'));
        $form->text('Skype', __('Skype'));
        $form->text('SecurityCode', __('SecurityCode'));
        $form->email('Email', __('Email'));
        $form->datetime('BornOn', __('BornOn'))->default(date('Y-m-d H:i:s'));
        $form->number('BaseSalary', __('BaseSalary'));
        $form->switch('IsMale', __('IsMale'));
        $form->switch('IsBlocked', __('IsBlocked'));
        $form->switch('IsDeleted', __('IsDeleted'));
        $form->datetime('RegisteredOn', __('RegisteredOn'))->default(date('Y-m-d H:i:s'));
        $form->datetime('CreatedOn', __('CreatedOn'))->default(date('Y-m-d H:i:s'));
        $form->datetime('UpdateOn', __('UpdateOn'))->default(date('Y-m-d H:i:s'));
        $form->number('Cashier_id', __('Cashier id'));
        $form->switch('IsManager', __('IsManager'));
        $form->text('Activities', __('Activities'));

        return $form;
    }
    
}
