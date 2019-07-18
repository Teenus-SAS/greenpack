<!DOCTYPE html>
<html>
<?php
require_once dirname(__DIR__) . "/dao/QuotationDao.php";
$quotationDao = new QuotationDao();
if (isset($_GET["id"])) {
  $quotation = $quotationDao->findById($_GET["id"]);
}
?>

<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="ProgId" content="Excel.Sheet">
  <title>Cotizacion No <?= $quotation->getId(); ?></title>
  <meta name="Generator" content="Microsoft Excel 15">
  <link rel="stylesheet" href="/css/style-template-quotation.css">
  <style>
    body {
      mso-displayed-decimal-separator: "\,";
      mso-displayed-thousand-separator: "\.";
    }

    .font010772 {
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
    }

    .font510772 {
      color: black;
      font-size: 11.0pt;
      font-weight: 700;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
    }

    .xl1510772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl6510772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: center;
      vertical-align: bottom;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl6610772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border: none;
      background: #C5E0B3;
      mso-pattern: #C5E0B3 none;
      white-space: nowrap;
    }

    .xl6710772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 700;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl6810772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: left;
      vertical-align: bottom;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl6910772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: "Short Date";
      text-align: center;
      vertical-align: bottom;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl7010772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 700;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: center;
      vertical-align: middle;
      border-top: .5pt solid black;
      border-right: .5pt solid black;
      border-bottom: none;
      border-left: .5pt solid black;
      background: #C5E0B3;
      mso-pattern: #C5E0B3 none;
      white-space: normal;
    }

    .xl7110772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 700;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: center;
      vertical-align: middle;
      border-top: .5pt solid black;
      border-right: .5pt solid black;
      border-bottom: none;
      border-left: .5pt solid black;
      background: #C5E0B3;
      mso-pattern: #C5E0B3 none;
      white-space: nowrap;
    }

    .xl7210772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: center;
      vertical-align: middle;
      border: .5pt solid black;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl7310772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: "_-\0022$\0022\\ * \#\,\#\#0_-\;\\-\0022$\0022\\ * \#\,\#\#0_-\;_-\0022$\0022\\ * \0022-\0022_-\;_-\@";
      text-align: center;
      vertical-align: middle;
      border: .5pt solid black;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl7410772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: center;
      vertical-align: bottom;
      border: .5pt solid black;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl7510772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border: .5pt solid black;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl7610772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: center;
      vertical-align: middle;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl7710772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: left;
      vertical-align: bottom;
      border-top: .5pt solid black;
      border-right: none;
      border-bottom: .5pt solid black;
      border-left: .5pt solid black;
      background: white;
      mso-pattern: white none;
      white-space: normal;
    }

    .xl7810772 {
      padding: 0px;
      mso-ignore: padding;
      color: windowtext;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border-top: .5pt solid black;
      border-right: none;
      border-bottom: .5pt solid black;
      border-left: none;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl7910772 {
      padding: 0px;
      mso-ignore: padding;
      color: windowtext;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border-top: .5pt solid black;
      border-right: none;
      border-bottom: .5pt solid black;
      border-left: none;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl8010772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 16.0pt;
      font-weight: 700;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: center;
      vertical-align: bottom;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl8110772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 18.0pt;
      font-weight: 700;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: center;
      vertical-align: middle;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl8210772 {
      padding: 0px;
      mso-ignore: padding;
      color: #0563C1;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: underline;
      text-underline-style: single;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: left;
      vertical-align: bottom;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl8310772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 700;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border: none;
      background: #C5E0B3;
      mso-pattern: #C5E0B3 none;
      white-space: nowrap;
    }

    .xl8410772 {
      padding: 0px;
      mso-ignore: padding;
      color: windowtext;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border: none;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl8510772 {
      padding: 0px;
      mso-ignore: padding;
      color: windowtext;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border: none;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl8610772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: "_-* \#\,\#\#0_-\;\\-* \#\,\#\#0_-\;_-* \0022-\0022_-\;_-\@";
      text-align: center;
      vertical-align: middle;
      border-top: .5pt solid black;
      border-right: none;
      border-bottom: .5pt solid black;
      border-left: .5pt solid black;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl8710772 {
      padding: 0px;
      mso-ignore: padding;
      color: windowtext;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border-top: .5pt solid black;
      border-right: .5pt solid black;
      border-bottom: .5pt solid black;
      border-left: none;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl8810772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: center;
      vertical-align: middle;
      border-top: .5pt solid black;
      border-right: none;
      border-bottom: .5pt solid black;
      border-left: .5pt solid black;
      background: white;
      mso-pattern: white none;
      white-space: normal;
    }

    .xl8910772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: left;
      vertical-align: bottom;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: normal;
    }

    .xl9010772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 700;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: center;
      vertical-align: middle;
      border-top: .5pt solid black;
      border-right: none;
      border-bottom: .5pt solid black;
      border-left: .5pt solid black;
      background: #C5E0B3;
      mso-pattern: #C5E0B3 none;
      white-space: nowrap;
    }

    .xl9110772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 700;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: center;
      vertical-align: bottom;
      border: none;
      background: #D8D8D8;
      mso-pattern: #D8D8D8 none;
      white-space: nowrap;
    }

    .xl9210772 {
      padding: 0px;
      mso-ignore: padding;
      color: black;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: center;
      vertical-align: bottom;
      border-top: .5pt solid black;
      border-right: none;
      border-bottom: none;
      border-left: .5pt solid black;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl9310772 {
      padding: 0px;
      mso-ignore: padding;
      color: windowtext;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border-top: .5pt solid black;
      border-right: none;
      border-bottom: none;
      border-left: none;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl9410772 {
      padding: 0px;
      mso-ignore: padding;
      color: windowtext;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border-top: .5pt solid black;
      border-right: .5pt solid black;
      border-bottom: none;
      border-left: none;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl9510772 {
      padding: 0px;
      mso-ignore: padding;
      color: windowtext;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border-top: none;
      border-right: none;
      border-bottom: none;
      border-left: .5pt solid black;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl9610772 {
      padding: 0px;
      mso-ignore: padding;
      color: windowtext;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border-top: none;
      border-right: .5pt solid black;
      border-bottom: none;
      border-left: none;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl9710772 {
      padding: 0px;
      mso-ignore: padding;
      color: windowtext;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border-top: none;
      border-right: none;
      border-bottom: .5pt solid black;
      border-left: .5pt solid black;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl9810772 {
      padding: 0px;
      mso-ignore: padding;
      color: windowtext;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border-top: none;
      border-right: none;
      border-bottom: .5pt solid black;
      border-left: none;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }

    .xl9910772 {
      padding: 0px;
      mso-ignore: padding;
      color: windowtext;
      font-size: 11.0pt;
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      font-family: Calibri;
      mso-generic-font-family: auto;
      mso-font-charset: 0;
      mso-number-format: General;
      text-align: general;
      vertical-align: bottom;
      border-top: none;
      border-right: .5pt solid black;
      border-bottom: .5pt solid black;
      border-left: none;
      mso-background-source: auto;
      mso-pattern: auto;
      white-space: nowrap;
    }
  </style>
</head>

<body>

  <div id="Plantilla_Cotizacion (3)_10772" align="center" x:publishsource="Excel" style="wdith:600px">

    <table border="0" cellpadding="0" cellspacing="0" width="600" style="
 border-collapse:
 collapse;
 table-layout:fixed; 
 width: 100%;
 margin: 0 auto;
 ">
      <colgroup>
        <col width="75" span="7" style="mso-width-source:userset;mso-width-alt:2742;
 width:56pt">
        <col width="96" style="mso-width-source:userset;mso-width-alt:3510;width:72pt">
        <col width="11" style="mso-width-source:userset;mso-width-alt:402;width:8pt">
        <col width="80" style="mso-width-source:userset;mso-width-alt:2925;width:60pt">
        <col width="116" style="mso-width-source:userset;mso-width-alt:4242;width:87pt">
        <!-- <col width="75" style="mso-width-source:userset;mso-width-alt:2742;width:56pt"> -->
      </colgroup>
      <tbody>
        <tr height="20" style="mso-height-source:userset;height:15.0pt">
          <td colspan="5" rowspan="5" height="108" width="375" style="height:81.0pt;width:280pt" align="left" valign="top"><span style="mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:45px;margin-top:20px;width:245px;
  height:66px"><img width="245" height="66" src="../images/Plantilla_Cotizacion (3)_10772_image002.png" alt="http://greenpack.com.co/wp-content/themes/greenpack/images/logo-greenpack.png" v:shapes="image1.png"></span>
            <span style="mso-ignore:vglayout2">
              <table cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td colspan="5" rowspan="5" height="108" class="xl1510772" width="375" style="height:81.0pt;width:280pt"></td>
                  </tr>
                </tbody>
              </table>
            </span></td>
          <td class="xl1510772" width="75" style="width:56pt"></td>
          <td class="xl1510772" width="75" style="width:56pt"></td>
          <td class="xl1510772" width="96" style="width:72pt"></td>
          <td class="xl1510772" width="11" style="width:8pt"></td>
          <td class="xl1510772" width="80" style="width:60pt"></td>
          <td class="xl1510772" width="116" style="width:87pt"></td>
        </tr>
        <tr height="28" style="height:21.0pt">
          <td colspan="3" height="28" class="xl6510772" style="height:21.0pt">NIT
            800,025,125-8</td>
          <td class="xl1510772"></td>
          <td colspan="2" class="xl8010772">COTIZACIÓN No</td>

        </tr>
        <tr height="20" style="mso-height-source:userset;height:15.0pt">
          <td colspan="3" height="20" class="xl6510772" style="height:15.0pt">Cra. 5 este No.
            20-69 Bodega # 6</td>
          <td class="xl1510772"></td>
          <td colspan="2" rowspan="3" class="xl8110772"><?= $quotation->getId() ?></td>
        </tr>
        <tr height="20" style="mso-height-source:userset;height:15.0pt">
          <td colspan="3" height="20" class="xl7610772" style="height:15.0pt">&nbsp;(57+1)
            893 26 31 / 35/ 38/ 42</td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="20" style="height:15.0pt">
          <td colspan="3" height="20" class="xl6510772" style="height:15.0pt">Mosquera -
            Cundinamarca</td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="6" style="mso-height-source:userset;height:4.5pt">
          <td height="6" class="xl1510772" style="height:4.5pt"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl6510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="20" style="height:15.0pt">
          <td height="20" class="xl6610772" style="height:15.0pt">&nbsp;</td>
          <td class="xl6610772">&nbsp;</td>
          <td class="xl6610772">&nbsp;</td>
          <td class="xl6610772">&nbsp;</td>
          <td class="xl6610772">&nbsp;</td>
          <td class="xl6610772">&nbsp;</td>
          <td class="xl6610772">&nbsp;</td>
          <td class="xl6610772">&nbsp;</td>
          <td class="xl6610772">&nbsp;</td>
          <td class="xl6610772">&nbsp;</td>
          <td class="xl6610772">&nbsp;</td>

        </tr>
        <tr height="20" style="height:15.0pt">
          <td colspan="2" height="20" class="xl6710772" style="height:15.0pt">Nombres y
            Apellidos</td>
          <td colspan="3" class="xl6810772">&nbsp;&nbsp;&nbsp;<?= $quotation->getNameClient() ?> <?= $quotation->getLastNameClient() ?></td>
          <td class="xl6710772">Email</td>
          <td colspan="2" class="xl8210772"><a href="mailto:<?= $quotation->getEmail() ?>"><span style="color:#0563C1"><?= $quotation->getEmail() ?></span></a></td>
          <td class="xl1510772"></td>
          <td class="xl6710772">Fecha<span style="mso-spacerun:yes">&nbsp;</span></td>
          <td class="xl6910772"><?= date("d/m/Y", $quotation->getCreatedAt()) ?></td>
        </tr>
        <tr height="20" style="height:15.0pt">
          <td colspan="2" height="20" class="xl6710772" style="height:15.0pt">Empresa</td>
          <td colspan="3" class="xl6810772">&nbsp;&nbsp;&nbsp;<?= $quotation->getCompany() != "" ? $quotation->getCompany() : "N/A" ?></td>
          <td class="xl6710772">Direccion</td>
          <td colspan="2" class="xl6810772"><?= $quotation->getAddress() ?></td>
          <td class="xl6810772"></td>
          <td class="xl6810772"></td>
          <td class="xl1510772"></td>
        </tr>
        <tr height="20" style="height:15.0pt">
          <td colspan="2" height="20" class="xl6710772" style="height:15.0pt">Ciudad</td>
          <td colspan="3" class="xl6810772">&nbsp;&nbsp;&nbsp;<?= $quotation->getCity() ?></td>
          <td class="xl6710772">Celular</td>
          <td colspan="2" class="xl6810772"><?= $quotation->getCellphoneNumber() ?></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
        </tr>
        <tr height="20" style="height:15.0pt">
          <td colspan="2" height="20" class="xl6710772" style="height:15.0pt">Telefono</td>
          <td colspan="3" class="xl6810772">&nbsp;&nbsp;&nbsp;<?= $quotation->getPhoneNumber() != "" ? $quotation->getPhoneNumber() : "N/A" ?></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
        </tr>
        <tr height="20" style="height:15.0pt">
          <td height="20" class="xl1510772" style="height:15.0pt"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
        </tr>
        <tr height="40" style="height:30.0pt">
          <td colspan="2" height="40" class="xl9010772" style="border-right:.5pt solid black;
  height:30.0pt">Producto</td>
          <td colspan="4" class="xl9010772" style="border-right:.5pt solid black;
  border-left:none">Descripcion</td>
          <td colspan="2" class="xl9010772" style="border-right:.5pt solid black;
  border-left:none">Cantidad<span style="mso-spacerun:yes">&nbsp;</span></td>
          <td class="xl7010772" width="80" style="border-left:none;width:60pt">Precio
            Unidad</td>
          <td colspan="2" class="xl7110772" style="border-left:none">Valor Total</td>
        </tr>


        <?php setlocale(LC_MONETARY, "es_CO");
        foreach ($quotation->getItems() as $item) { ?>
          <!-- individual product -->
          <tr height="48" style="mso-height-source:userset;height:36.0pt">
            <td colspan="2" height="48" class="xl8810772" width="150" style="height:36.0pt;
                        width:112pt"><img src="<?= $item->getProduct()->getImages()[0]->getUrl() ?>" width="70" height="70" style="margin: 2px;"></td>
            <td colspan="4" class="xl7710772" width="375" style="width:280pt;vertical-align: middle!important;">
              <font class="font510772">Referencia</font>
              <font class="font010772"> <?= $item->getProduct()->getRef() ?> </font>
              <br>
              <font class="font510772">Material</font>
              <font class="font010772"> <?= $item->getMaterial()->getName() ?></font>
              <br>
              <font class="font510772">Medidas</font>
              <font class="font010772"> <?= $item->getMeasurement()->getWidth() ?>*<?= $item->getMeasurement()->getHeight() ?>*<?= $item->getMeasurement()->getLength() ?></font>
            </td>
            <td  colspan="2" class="xl8610772" style="border-right:.5pt solid black"><span style="mso-spacerun:yes">&nbsp;</span><?= number_format($item->getQuantity(), 0, ",", ".") ?></td>
            <td class="xl7210772" style="border-left:none"><span style="mso-spacerun:yes">&nbsp;</span>$<span style="mso-spacerun:yes">&nbsp;</span><?= money_format("%!i", $item->getPrice()) ?></td>
            <td colspan="2" class="xl7310772" style="border-left:none"><span style="mso-spacerun:yes">&nbsp;</span>$<span style="mso-spacerun:yes">&nbsp;</span><?= money_format("%!i", $item->calculateTotal()) ?> </td>

          </tr>
          <!-- individual product -->
        <?php } ?>


        <tr height="12" style="mso-height-source:userset;height:9.0pt">
          <td height="12" class="xl6510772" style="height:9.0pt"></td>
          <td class="xl6510772"></td>
          <td class="xl6510772"></td>
          <td class="xl6510772"></td>
          <td class="xl6510772"></td>
          <td class="xl6510772"></td>
          <td class="xl6510772"></td>
          <td class="xl6510772"></td>
          <td class="xl6510772"></td>
          <td class="xl6510772"></td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="20" style="height:15.0pt">
          <td height="20" class="xl1510772" colspan="2" style="height:15.0pt">Observaciones</td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td colspan="7" rowspan="3" height="63" class="xl9210772" style="border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:47.25pt; vertical-align: top!important"><?= $quotation->getExtraInformation() ?></td>
          <td class="xl6510772"></td>
          <td class="xl1510772">Subtotal</td>
          <td  colspan="2" class="xl7510772">&nbsp;</td>
        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl6510772" style="height:15.75pt"></td>
          <td class="xl1510772">IVA 19%</td>
          <td colspan="2" class="xl7510772" style="border-top:none">&nbsp;</td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl6510772" style="height:15.75pt"></td>
          <td class="xl1510772">Total</td>
          <td colspan="2" class="xl7310772" style="border-top:none"><span style="mso-spacerun:yes">&nbsp;</span>$<span style="mso-spacerun:yes">&nbsp;</span><?= money_format("%!i", $quotation->calculateTotal()) ?></td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl1510772" style="height:15.75pt"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td colspan="11" height="21" class="xl8310772" style="height:15.75pt">Condiciones
            de Pago</td>
        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td colspan="11" height="21" class="xl6810772" style="height:15.75pt">50% al
            realizar el pedido - 50% a contra entrega de los productos</td>
        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl1510772" style="height:15.75pt"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td colspan="11" height="21" class="xl8310772" style="height:15.75pt">Tiempo de
            Entrega a partir de la aprobación</td>
        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td colspan="11" height="21" class="xl6810772" style="height:15.75pt">Sin
            impresión<span style="mso-spacerun:yes">&nbsp; </span>8 dias</td>
        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td colspan="11" height="21" class="xl6810772" style="height:15.75pt">Impresos 15
            dias</td>
        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl1510772" style="height:15.75pt"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td colspan="11" height="21" class="xl8310772" style="height:15.75pt">Vigencia</td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td colspan="11" height="21" class="xl8910772" width="828" style="height:15.75pt;
  width:619pt"><span style="mso-spacerun:yes">&nbsp;&nbsp;</span>30 dias contados a partir
            de la fecha de la entrega de la cotizacion<br>
            presente propuesta</td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl1510772" style="height:15.75pt"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl1510772" style="height:15.75pt"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl1510772" style="height:15.75pt"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl1510772" colspan="2" style="height:15.75pt">Cordialmente,</td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl1510772" style="height:15.75pt"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl1510772" style="height:15.75pt"></td>
          <td colspan="3" class="xl9110772">Vendedor 1</td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl1510772" style="height:15.75pt"></td>
          <td class="xl1510772">Movil:<span style="mso-spacerun:yes">&nbsp;</span></td>
          <td colspan="2" class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl1510772" style="height:15.75pt"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>

        </tr>
        <tr height="21" style="mso-height-source:userset;height:15.75pt">
          <td height="21" class="xl1510772" style="height:15.75pt"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>
          <td class="xl1510772"></td>

        </tr>
      </tbody>
    </table>
  </div>
  <script type="text/javascript" src="/js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="/vendor/jquery.formatCurrency-1.4.0.min.js"></script>
  <script type="text/javascript" src="/vendor/jquery.formatCurrency.all.js"></script>
  <script type="text/javascript">
    $('.money').formatCurrency({
      region: 'es-CO'
    })
  </script>
</body>

</html>