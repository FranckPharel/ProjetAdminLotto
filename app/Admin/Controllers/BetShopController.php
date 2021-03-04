<?php

namespace App\Admin\Controllers;

use App\Models\Betshop;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BetShopController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Betshop';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Betshop);

        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('id', __('Id'));
        $grid->column('BetStation_id', __('BetStation id'));
        $grid->column('Currency_id', __('Currency id'));
        $grid->column('Title', __('Title'));
        $grid->column('IsBlocked', __('IsBlocked'));
        $grid->column('Message', __('Message'));
        $grid->column('CurrentBalance', __('CurrentBalance'));
        $grid->column('CurrentLimit', __('CurrentLimit'));
        $grid->column('Turnover', __('Turnover'));
        $grid->column('WonAmount', __('WonAmount'));
        $grid->column('CanceledAmount', __('CanceledAmount'));
        $grid->column('DepositAmount', __('DepositAmount'));
        $grid->column('ContractPercentage', __('ContractPercentage'));
        $grid->column('LastBalanceCaculationDate', __('LastBalanceCaculationDate'));
        $grid->column('CreatedBy', __('CreatedBy'));
        $grid->column('CreatedOn', __('CreatedOn'));
        $grid->column('UpdatedOn', __('UpdatedOn'));
        $grid->column('IsDeleted', __('IsDeleted'));
        $grid->column('MinStakeAmount', __('MinStakeAmount'));
        $grid->column('MinEventCount', __('MinEventCount'));
        $grid->column('MaxStakeAmount', __('MaxStakeAmount'));
        $grid->column('MaxEventCount', __('MaxEventCount'));
        $grid->column('MaxDayCount', __('MaxDayCount'));
        $grid->column('MaxOddValue', __('MaxOddValue'));
        $grid->column('MaxPayoutAmount', __('MaxPayoutAmount'));
        $grid->column('BookmakerId', __('BookmakerId'));
        $grid->column('IsHoldOptimized', __('IsHoldOptimized'));
        $grid->column('ActivateLive', __('ActivateLive'));
        $grid->column('Activities', __('Activities'));
        $grid->column('Credit', __('Credit'));
        $grid->column('IsAgent', __('IsAgent'));

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
        $show = new Show(Betshop::findOrFail($id));

        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('id', __('Id'));
        $show->field('BetStation_id', __('BetStation id'));
        $show->field('Currency_id', __('Currency id'));
        $show->field('Title', __('Title'));
        $show->field('IsBlocked', __('IsBlocked'));
        $show->field('Message', __('Message'));
        $show->field('CurrentBalance', __('CurrentBalance'));
        $show->field('CurrentLimit', __('CurrentLimit'));
        $show->field('Turnover', __('Turnover'));
        $show->field('WonAmount', __('WonAmount'));
        $show->field('CanceledAmount', __('CanceledAmount'));
        $show->field('DepositAmount', __('DepositAmount'));
        $show->field('ContractPercentage', __('ContractPercentage'));
        $show->field('LastBalanceCaculationDate', __('LastBalanceCaculationDate'));
        $show->field('CreatedBy', __('CreatedBy'));
        $show->field('CreatedOn', __('CreatedOn'));
        $show->field('UpdatedOn', __('UpdatedOn'));
        $show->field('IsDeleted', __('IsDeleted'));
        $show->field('MinStakeAmount', __('MinStakeAmount'));
        $show->field('MinEventCount', __('MinEventCount'));
        $show->field('MaxStakeAmount', __('MaxStakeAmount'));
        $show->field('MaxEventCount', __('MaxEventCount'));
        $show->field('MaxDayCount', __('MaxDayCount'));
        $show->field('MaxOddValue', __('MaxOddValue'));
        $show->field('MaxPayoutAmount', __('MaxPayoutAmount'));
        $show->field('BookmakerId', __('BookmakerId'));
        $show->field('IsHoldOptimized', __('IsHoldOptimized'));
        $show->field('ActivateLive', __('ActivateLive'));
        $show->field('Activities', __('Activities'));
        $show->field('Credit', __('Credit'));
        $show->field('IsAgent', __('IsAgent'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Betshop);

        $form->number('BetStation_id', __('BetStation id'));
        $form->number('Currency_id', __('Currency id'));
        $form->text('Title', __('Title'));
        $form->switch('IsBlocked', __('IsBlocked'));
        $form->text('Message', __('Message'));
        $form->number('CurrentBalance', __('CurrentBalance'));
        $form->decimal('CurrentLimit', __('CurrentLimit'));
        $form->decimal('Turnover', __('Turnover'));
        $form->decimal('WonAmount', __('WonAmount'));
        $form->decimal('CanceledAmount', __('CanceledAmount'));
        $form->decimal('DepositAmount', __('DepositAmount'));
        $form->decimal('ContractPercentage', __('ContractPercentage'));
        $form->datetime('LastBalanceCaculationDate', __('LastBalanceCaculationDate'))->default(date('Y-m-d H:i:s'));
        $form->number('CreatedBy', __('CreatedBy'));
        $form->datetime('CreatedOn', __('CreatedOn'))->default(date('Y-m-d H:i:s'));
        $form->datetime('UpdatedOn', __('UpdatedOn'))->default(date('Y-m-d H:i:s'));
        $form->switch('IsDeleted', __('IsDeleted'));
        $form->decimal('MinStakeAmount', __('MinStakeAmount'));
        $form->number('MinEventCount', __('MinEventCount'));
        $form->decimal('MaxStakeAmount', __('MaxStakeAmount'));
        $form->number('MaxEventCount', __('MaxEventCount'));
        $form->number('MaxDayCount', __('MaxDayCount'));
        $form->number('MaxOddValue', __('MaxOddValue'));
        $form->decimal('MaxPayoutAmount', __('MaxPayoutAmount'));
        $form->number('BookmakerId', __('BookmakerId'));
        $form->switch('IsHoldOptimized', __('IsHoldOptimized'));
        $form->switch('ActivateLive', __('ActivateLive'));
        $form->text('Activities', __('Activities'));
        $form->decimal('Credit', __('Credit'));
        $form->switch('IsAgent', __('IsAgent'));

        return $form;
    }
}
