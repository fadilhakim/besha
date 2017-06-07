<?php


  $due_intr = "24 hours";

  $create_date= date("d M, Y");

  $effectiveDate = strtotime("+".$due_intr, strtotime($create_date));

  $due_date = date("d M, Y",$effectiveDate);

  $user_sess = $this->session->all_userdata();

 // print_r($user_sess);exit;

  $detail_user = $this->model_user->get_user_detail($user_sess["user_id"]);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$name_pdf?></title>
    <link rel="stylesheet" href="<?=base_url("assets/plugins/invoice/fancy2/style.css")?>" media="all" />
    <style>

	</style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo" style="float:left; width:45%">
        <img src="<?=base_url("assets/image/logo-besha.jpg")?>" >
        <!-- <img src="<?=base_url("assets/plugins/invoice/fancy2/logo.png")?>" height="70"> -->
      </div>
      <div id="company" style="float:right; width:55%">
        <!-- <h2 class="name"><?=TITLE?></h2> -->
        <div><?=ADDRESS?></div>
        <div><?=PHONE?></div>
        <div><?=EMAIL_SPAREPART?></div>
      </div>
      <span style="clear:both"></span>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">QUOTATION TO:</div>
          <h2 class="name"><?= $detail_user["contact_person"]?></h2>
          <div class="address"><?= $detail_user["billing_address"]?></div>
          <div class="email"><a href="mailto:<?=$user_sess["email"]?>"><?=$user_sess["email"]?></a></div>
        </div>
        <div id="invoice">
          <h1>SURAT PENAWARAN SPAREPART</h1>
          <div class="date">Tanggal Penawaran: <?=$create_date?></div>
          <div class="date">Ahkir Penawaran: <?=$due_date?></div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="">IMAGE</th>
            <th class="desc">PRODUCT NAME</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <?php
		  foreach($this->cart->contents() as $items)
			{
				$detail_sparepart = $this->model_sparepart->getproductfromIdandCode($items['id'],$items['code'])->row();
		  ?>
          <tr>
            <td class=""><img
                    src="<?=check_image_sparepart($items['id'])?>" width="100" height="100" /></td>
            <td class="desc"><?=$items["code"]?> / <?=$detail_sparepart->sparepart_name?></td>
            <td class="unit">Rp. <?=number_format($items["price"])?></td>
            <td class="qty"><?=$items["qty"]?> </td>
            <td class="total">Rp. <?=number_format($items["subtotal"])?></td>
          </tr>
          <?php
			}
		  ?>
        </tbody>
        <tfoot>
          <?php
            $cart_total = $this->cart->total();
            $sub_total = $cart_total * 0.1;
            $grand_total = $cart_total + $sub_total;

          ?>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td><h3> Rp. <?=number_format($cart_total, 2, ',', '.');?> </h3></td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TAX 10%</td>
            <td>Rp. <?=number_format($sub_total, 2, ',', '.');?></td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>Rp. <?=number_format($grand_total, 2, ',', '.');?></td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
      <div id="notices" style="padding-left:6px;border-left-width:6px;border-left-style:solid;border-left-color:#0087C3;" >
        <div>KETERANGAN :</div>
        <div class="notice" style="font-size:1.2em;" >1. Harga Nett</div>
        <div class="notice" style="font-size:1.2em;" >2. Penawaran Berlaku 15 Hari dari  tanggal penawaran</div>
        <div class="notice" style="font-size:1.2em;" >3. Pembayaran 7 hari setelah barang diterima</div>
      </div>
    </main>
    <footer>
      Quotation was created on a computer and is valid without the signature and stamp.
    </footer>
  </body>
</html>
