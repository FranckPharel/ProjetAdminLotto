<?php

namespace App\Admin\Controllers;

use App\Models\Partner;
use App\Utils\PartnerUtils;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PartnerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Partners';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Partner);

         $grid->column('id', __('#'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));
        $grid->column('Title', __('Title'));
        $grid->column('CreatedOn', __('Created On'));
        $grid->column('Email', __('Email'));
        $grid->column('Phone', __('Phone'));
        $grid->column('CurrentLimit', __('Credits'));

        $grid->column('Description', __('Description'));
        // $grid->column('UpdatedOn', __('UpdatedOn'));
        // $grid->column('IsActive', __('IsActive'));
        // $grid->column('IsBlocked', __('IsBlocked'));
        // $grid->column('IsDeleted', __('IsDeleted'));
        // $grid->column('ContractPercentage', __('ContractPercentage'));
        // $grid->column('AppKey', __('AppKey'));
        // $grid->column('Address', __('Address'));
        // $grid->column('LogoImage', __('LogoImage'));
        // $grid->column('LogoContentType', __('LogoContentType'));
        // $grid->column('LogoFileName', __('LogoFileName'));
        // $grid->column('PrintLogoImage', __('PrintLogoImage'));
        // $grid->column('PrintLogoContentType', __('PrintLogoContentType'));
        // $grid->column('PrintLogoFileName', __('PrintLogoFileName'));
        // $grid->column('IsSmsMsgEnabled', __('IsSmsMsgEnabled'));
        // $grid->column('IsEmailMsgEnabled', __('IsEmailMsgEnabled'));
        // $grid->column('IsUserMsgEnabled', __('IsUserMsgEnabled'));
        // $grid->column('CashierClientLogoImage', __('CashierClientLogoImage'));
        // $grid->column('CashierClientLogoContentType', __('CashierClientLogoContentType'));
        // $grid->column('CashierClientLogoFileName', __('CashierClientLogoFileName'));
        // $grid->column('InvoiceBalance', __('InvoiceBalance'));
        // $grid->column('PaidBalance', __('PaidBalance'));
        // $grid->column('CurrencyId', __('CurrencyId'));

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
        $show = new Show(Partner::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('Title', __('Title'));
        $show->field('Description', __('Description'));
        $show->field('CreatedOn', __('CreatedOn'));
        $show->field('UpdatedOn', __('UpdatedOn'));
        $show->field('IsActive', __('IsActive'));
        $show->field('IsBlocked', __('IsBlocked'));
        $show->field('IsDeleted', __('IsDeleted'));
        $show->field('ContractPercentage', __('ContractPercentage'));
        $show->field('AppKey', __('AppKey'));
        $show->field('Address', __('Address'));
        $show->field('Phone', __('Phone'));
        $show->field('LogoImage', __('LogoImage'));
        $show->field('LogoContentType', __('LogoContentType'));
        $show->field('LogoFileName', __('LogoFileName'));
        $show->field('PrintLogoImage', __('PrintLogoImage'));
        $show->field('PrintLogoContentType', __('PrintLogoContentType'));
        $show->field('PrintLogoFileName', __('PrintLogoFileName'));
        $show->field('Email', __('Email'));
        $show->field('IsSmsMsgEnabled', __('IsSmsMsgEnabled'));
        $show->field('IsEmailMsgEnabled', __('IsEmailMsgEnabled'));
        $show->field('IsUserMsgEnabled', __('IsUserMsgEnabled'));
        $show->field('CashierClientLogoImage', __('CashierClientLogoImage'));
        $show->field('CashierClientLogoContentType', __('CashierClientLogoContentType'));
        $show->field('CashierClientLogoFileName', __('CashierClientLogoFileName'));
        $show->field('InvoiceBalance', __('InvoiceBalance'));
        $show->field('PaidBalance', __('PaidBalance'));
        $show->field('CurrencyId', __('CurrencyId'));
        $show->field('CurrentLimit', __('CurrentLimit'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $apiKey  = PartnerUtils::generateStrongApiKey();
        $form = new Form(new Partner);

        $form->text('Title', __('Title'));
        $form->text('AppKey', __('App Key'))->readonly()->value($apiKey);
        $form->text('Address', __('Address'));
        $form->mobile('Phone', __('Phone'));
        $form->email('Email', __('E-mail'));
        $form->decimal('ContractPercentage', __('Percentage'));
        $form->textarea('Description', __('Description'));
        $form->decimal('CurrentLimit', __('Current Limit'));

        $form->datetime('CreatedOn', __('Created On'))->default(date('Y-m-d H:i:s'));
        $form->datetime('UpdatedOn', __('Updated On'))->default(date('Y-m-d H:i:s'));
        $form->switch('IsDeleted', __('Is Deleted ?'));
        $form->switch('IsActive', __('Is Active ?'));
        $form->switch('IsBlocked', __('Is Blocked ? '));
        $form->file('LogoImage', __('Logo'));
        $form->file('PrintLogoImage', __('PrintLogo'));
        $form->text('LogoContentType', __('Logo Type'));
        $form->file('CashierClientLogoImage', __('Cashier Client Logo'));
        $form->select('CurrencyId', __('Currency'))->options([
            "FCFA" => "FCFA",
            "USD" => "USD",
            "EUR" => "EUR",
        ]);
        $form->text('CashierClientLogoContentType', __('Cashier Client Logo Type'));

        // $form->file('LogoFileName', __('LogoFileName'));
        // $form->text('PrintLogoContentType', __('PrintLogoContentType'));
        // $form->text('PrintLogoFileName', __('PrintLogoFileName'));
        // $form->switch('IsSmsMsgEnabled', __('IsSmsMsgEnabled'));
        // $form->switch('IsEmailMsgEnabled', __('IsEmailMsgEnabled'));
        // $form->switch('IsUserMsgEnabled', __('IsUserMsgEnabled'));
        // $form->text('CashierClientLogoFileName', __('CashierClientLogoFileName'));
        // $form->decimal('InvoiceBalance', __('InvoiceBalance'));
        // $form->decimal('PaidBalance', __('PaidBalance'));
        return $form;
    }
}
