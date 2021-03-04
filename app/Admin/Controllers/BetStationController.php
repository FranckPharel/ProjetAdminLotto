<?php

namespace App\Admin\Controllers;

use App\Models\BetStation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BetStationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BetStations';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BetStation);

        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));
        // $grid->column('Id', __('Id'));
        $grid->column('Partner_id', __('Partner id'));
        $grid->column('Currency_id', __('Currency id'));
        $grid->column('Title', __('Title'));
        $grid->column('LogoImage', __('LogoImage'));
        $grid->column('LogoContentType', __('LogoContentType'));
        $grid->column('LogoFileName', __('LogoFileName'));
        $grid->column('IsBlocked', __('IsBlocked'));
        $grid->column('Message', __('Message'));
        $grid->column('CurrentBalance', __('CurrentBalance'));
        $grid->column('CurrentLimit', __('CurrentLimit'));
        $grid->column('DepositAmount', __('DepositAmount'));
        $grid->column('Turnover', __('Turnover'));
        $grid->column('WonAmount', __('WonAmount'));
        $grid->column('CanceledAmount', __('CanceledAmount'));
        $grid->column('PaidOutAmount', __('PaidOutAmount'));
        $grid->column('ContractPercentage', __('ContractPercentage'));
        $grid->column('LastBalanceCaculationDate', __('LastBalanceCaculationDate'));
        $grid->column('CreatedBy', __('CreatedBy'));
        $grid->column('CreatedOn', __('CreatedOn'));
        $grid->column('UpdatedOn', __('UpdatedOn'));
        $grid->column('IsDeleted', __('IsDeleted'));
        $grid->column('SuperBonusLimit', __('SuperBonusLimit'));
        $grid->column('TombolaStartAmount', __('TombolaStartAmount'));
        $grid->column('TombolaEndAmount', __('TombolaEndAmount'));
        $grid->column('CurrentTombolaAmount', __('CurrentTombolaAmount'));
        $grid->column('TombolaPercentage', __('TombolaPercentage'));
        $grid->column('IsJackpotEnabled', __('IsJackpotEnabled'));
        $grid->column('LastDrawingDate', __('LastDrawingDate'));
        $grid->column('OnlineCredit', __('OnlineCredit'));
        $grid->column('NotificationEmail', __('NotificationEmail'));
        $grid->column('NotificationPhoneNumber', __('NotificationPhoneNumber'));
        $grid->column('ConsolidateShopOdds', __('ConsolidateShopOdds'));
        $grid->column('ShopUserCashierId', __('ShopUserCashierId'));
        $grid->column('Activities', __('Activities'));
        $grid->column('LocalWebSocket', __('LocalWebSocket'));
        $grid->column('LocalWebHost', __('LocalWebHost'));
        $grid->column('Credit', __('Credit'));

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
        $show = new Show(BetStation::findOrFail($id));

        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('Id', __('Id'));
        $show->field('Partner_id', __('Partner id'));
        $show->field('Currency_id', __('Currency id'));
        $show->field('Title', __('Title'));
        $show->field('LogoImage', __('LogoImage'));
        $show->field('LogoContentType', __('LogoContentType'));
        $show->field('LogoFileName', __('LogoFileName'));
        $show->field('IsBlocked', __('IsBlocked'));
        $show->field('Message', __('Message'));
        $show->field('CurrentBalance', __('CurrentBalance'));
        $show->field('CurrentLimit', __('CurrentLimit'));
        $show->field('DepositAmount', __('DepositAmount'));
        $show->field('Turnover', __('Turnover'));
        $show->field('WonAmount', __('WonAmount'));
        $show->field('CanceledAmount', __('CanceledAmount'));
        $show->field('PaidOutAmount', __('PaidOutAmount'));
        $show->field('ContractPercentage', __('ContractPercentage'));
        $show->field('LastBalanceCaculationDate', __('LastBalanceCaculationDate'));
        $show->field('CreatedBy', __('CreatedBy'));
        $show->field('CreatedOn', __('CreatedOn'));
        $show->field('UpdatedOn', __('UpdatedOn'));
        $show->field('IsDeleted', __('IsDeleted'));
        $show->field('SuperBonusLimit', __('SuperBonusLimit'));
        $show->field('TombolaStartAmount', __('TombolaStartAmount'));
        $show->field('TombolaEndAmount', __('TombolaEndAmount'));
        $show->field('CurrentTombolaAmount', __('CurrentTombolaAmount'));
        $show->field('TombolaPercentage', __('TombolaPercentage'));
        $show->field('IsJackpotEnabled', __('IsJackpotEnabled'));
        $show->field('LastDrawingDate', __('LastDrawingDate'));
        $show->field('OnlineCredit', __('OnlineCredit'));
        $show->field('NotificationEmail', __('NotificationEmail'));
        $show->field('NotificationPhoneNumber', __('NotificationPhoneNumber'));
        $show->field('ConsolidateShopOdds', __('ConsolidateShopOdds'));
        $show->field('ShopUserCashierId', __('ShopUserCashierId'));
        $show->field('Activities', __('Activities'));
        $show->field('LocalWebSocket', __('LocalWebSocket'));
        $show->field('LocalWebHost', __('LocalWebHost'));
        $show->field('Credit', __('Credit'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BetStation);

        $form->number('Id', __('Id'));
        $form->number('Partner_id', __('Partner id'));
        $form->number('Currency_id', __('Currency id'));
        $form->text('Title', __('Title'));
        $form->textarea('LogoImage', __('LogoImage'));
        $form->text('LogoContentType', __('LogoContentType'));
        $form->text('LogoFileName', __('LogoFileName'));
        $form->switch('IsBlocked', __('IsBlocked'));
        $form->text('Message', __('Message'));
        $form->decimal('CurrentBalance', __('CurrentBalance'));
        $form->decimal('CurrentLimit', __('CurrentLimit'));
        $form->decimal('DepositAmount', __('DepositAmount'));
        $form->decimal('Turnover', __('Turnover'));
        $form->decimal('WonAmount', __('WonAmount'));
        $form->decimal('CanceledAmount', __('CanceledAmount'));
        $form->decimal('PaidOutAmount', __('PaidOutAmount'));
        $form->decimal('ContractPercentage', __('ContractPercentage'));
        $form->datetime('LastBalanceCaculationDate', __('LastBalanceCaculationDate'))->default(date('Y-m-d H:i:s'));
        $form->number('CreatedBy', __('CreatedBy'));
        $form->datetime('CreatedOn', __('CreatedOn'))->default(date('Y-m-d H:i:s'));
        $form->datetime('UpdatedOn', __('UpdatedOn'))->default(date('Y-m-d H:i:s'));
        $form->switch('IsDeleted', __('IsDeleted'));
        $form->number('SuperBonusLimit', __('SuperBonusLimit'));
        $form->decimal('TombolaStartAmount', __('TombolaStartAmount'));
        $form->decimal('TombolaEndAmount', __('TombolaEndAmount'));
        $form->decimal('CurrentTombolaAmount', __('CurrentTombolaAmount'));
        $form->decimal('TombolaPercentage', __('TombolaPercentage'));
        $form->switch('IsJackpotEnabled', __('IsJackpotEnabled'));
        $form->datetime('LastDrawingDate', __('LastDrawingDate'))->default(date('Y-m-d H:i:s'));
        $form->number('OnlineCredit', __('OnlineCredit'));
        $form->text('NotificationEmail', __('NotificationEmail'));
        $form->text('NotificationPhoneNumber', __('NotificationPhoneNumber'));
        $form->switch('ConsolidateShopOdds', __('ConsolidateShopOdds'));
        $form->number('ShopUserCashierId', __('ShopUserCashierId'));
        $form->text('Activities', __('Activities'));
        $form->text('LocalWebSocket', __('LocalWebSocket'));
        $form->text('LocalWebHost', __('LocalWebHost'));
        $form->decimal('Credit', __('Credit'));

        return $form;
    }
}
