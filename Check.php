<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><meta charset="utf-8"><title>CheckVoisinage</title><!-- base href="https://racco.ftth.sir.bouyguestelecom.fr/" --><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="icon" type="image/x-icon" href="https://racco.ftth.sir.bouyguestelecom.fr/logo.ico"><meta name="theme-color" content="#673ab7"><link rel="manifest" href="https://racco.ftth.sir.bouyguestelecom.fr/manifest.json"><link href="styles.css" rel="stylesheet">
<style>.btn[_ngcontent-c0]{border-radius:3px;background-color:#c8007b;color:#fff;width:95%;margin:auto;display:block;font-size:90%;padding:.5% 0!important}.red[_ngcontent-c0]{color:#f70025}.green[_ngcontent-c0]{color:#86c452}.gray[_ngcontent-c0]{background-color:#454545;color:#454545}.red-status[_ngcontent-c0]{color:#fff;background-color:#f70025}.green-status[_ngcontent-c0]{color:#fff;background-color:#86c452}.shadow[_ngcontent-c0]{background:#fff;-webkit-box-shadow:0 8px 16px 0 rgba(0,0,0,.1);box-shadow:0 8px 16px 0 rgba(0,0,0,.1)}.app-container[_ngcontent-c0]{height:100vh;width:100vw;background-color:#fafafa}.alert-danger[_ngcontent-c0]{text-align:center;margin:5%}</style><style>.header[_ngcontent-c1]{background-color:#454545;color:#fff;height:6vh}.header-content[_ngcontent-c1]{margin-top:1vh;height:3vh}.left[_ngcontent-c1]{float:left}.refresh[_ngcontent-c1]{float:right}.btn[_ngcontent-c1], .btn-xs[_ngcontent-c1]{background-color:#7c7b7b;height:3vh}.title[_ngcontent-c1]{white-space:nowrap;text-align:center;line-height:210%}.logo[_ngcontent-c1]{height:4.5vh}.center[_ngcontent-c1]{text-align:center}.dx-popup-title.dx-toolbar[_ngcontent-c1]{font-size:1200px}</style><style>.main-title[_ngcontent-c2]{position:absolute;width:90.3%;height:16.6%;font-size:18px;font-weight:400;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:-.2px;text-align:center;color:#009dcc;margin-right:4.7%;margin-left:5%;top:11.6%;bottom:71.8%}</style><style>.bnt-check-vois[_ngcontent-c3]{padding-top:0;padding-bottom:0;color:#fff;background-color:#c8007b;height:5vh}.row[_ngcontent-c3]{margin-right:0;margin-left:0;padding:0}.panel[_ngcontent-c3]{margin-bottom:0}hr[_ngcontent-c3]{margin-top:1%;margin-bottom:1%;border:1px solid #a9a9a9}[class*=col-][_ngcontent-c3]{padding-left:0;padding-right:0}.badge[_ngcontent-c3]{display:block}.red[_ngcontent-c3]{background-color:#de5e5e}.green[_ngcontent-c3]{background-color:#86c452}.voisins[_ngcontent-c3]{border:1px solid #ececec;background-color:#fff;padding:2%;font-size:90%}.refresh-btn[_ngcontent-c3]{background-color:#c8007b;color:#fff;border-radius:0 3px 0 0}.title[_ngcontent-c3]{color:#fff;background-color:#454545;vertical-align:-webkit-baseline-middle!important;line-height:275%;padding-left:2%;border-radius:5px 0 0}.container-title[_ngcontent-c3]{padding-right:0;padding-left:0;border-radius:0;border:0;margin-bottom:0;font-size:90%}.row-eq-height[_ngcontent-c3]{display:-webkit-box;display:-ms-flexbox;display:flex}.shadow[_ngcontent-c3]{background:#fff;-webkit-box-shadow:0 8px 16px 0 rgba(0,0,0,.1);box-shadow:0 8px 16px 0 rgba(0,0,0,.1);border-radius:10px}.font[_ngcontent-c3]{font-family:'Open Sans'!important}</style><style>.container[_ngcontent-c4]{border:1px solid #ececec;margin:0;font-size:90%;font-family:'Open Sans';background-color:#fff}.container-title[_ngcontent-c4]{padding-right:0;padding-left:0;border-radius:0;border:0;margin-bottom:0;font-size:90%;font-family:'Open Sans'}.status[_ngcontent-c4]{font-size:10px;line-height:260%;text-align:center;border-radius:0 5px 0 0}.title[_ngcontent-c4]{color:#fff;background-color:#454545;vertical-align:-webkit-baseline-middle!important;line-height:220%;padding-left:2%;border-radius:5px 0 0}.informations-container[_ngcontent-c4]{font-size:75%;padding-right:0;padding-left:0;margin-left:4%;margin-right:4%;border:1px solid #a9a9a9}.container-fluid[_ngcontent-c4]{padding:0;text-align:center}h5[_ngcontent-c4]{text-align:center;font-weight:700;margin-top:1%;margin-bottom:1%}hr[_ngcontent-c4]{margin-top:2%;margin-bottom:2%;border:1px solid #f4f4f4}br[_ngcontent-c4]{line-height:20%}.container-performance[_ngcontent-c4]{margin:0;color:#fff;font-weight:700;font-size:80%}.no-padding[_ngcontent-c4]{padding:0}.eq-height[_ngcontent-c4]{float:none;display:table-cell;vertical-align:middle;text-align:center}.row-eq-height[_ngcontent-c4]{display:-webkit-box;display:-ms-flexbox;display:flex}.form-group[_ngcontent-c4]{margin-top:0;margin-bottom:0;padding:1.5%}.labels[_ngcontent-c4]{margin:0;padding:0}.glyphicon-plus[_ngcontent-c4]{font-size:86%}.framed[_ngcontent-c4]{border:1px solid #a9a9a9;margin:0 0 0 auto;padding:0 3%;float:right}.no-side-padding[_ngcontent-c4]{padding-left:0;padding-right:0}.no-vertical-padding[_ngcontent-c4]{padding-top:0!important;padding-bottom:0!important}.margins[_ngcontent-c4]{margin-left:1%;margin-right:1%}.center[_ngcontent-c4]{text-align:center!important}.indicators[_ngcontent-c4]{margin-top:5%;margin-bottom:5%;font-size:83%}.margin-up-down[_ngcontent-c4]{margin-top:3%;margin-bottom:3%}.smaller[_ngcontent-c4]{font-size:90%}.width-100[_ngcontent-c4]{width:100%}</style><style>.btn[_ngcontent-c4]{border-radius:3px;background-color:#c8007b;color:#fff;width:95%;margin:auto;display:block;font-size:90%;padding:.5% 0!important}.red[_ngcontent-c4]{color:#f70025}.green[_ngcontent-c4]{color:#86c452}.gray[_ngcontent-c4]{background-color:#454545;color:#454545}.red-status[_ngcontent-c4]{color:#fff;background-color:#f70025}.green-status[_ngcontent-c4]{color:#fff;background-color:#86c452}.shadow[_ngcontent-c4]{background:#fff;-webkit-box-shadow:0 8px 16px 0 rgba(0,0,0,.1);box-shadow:0 8px 16px 0 rgba(0,0,0,.1)}.app-container[_ngcontent-c4]{height:100vh;width:100vw;background-color:#fafafa}.alert-danger[_ngcontent-c4]{text-align:center;margin:5%}</style><style>.panel[_ngcontent-c5]{padding:0!important;font-size:90%;margin-bottom:4%}.client-icon-container[_ngcontent-c5]{background-color:#86c452;color:#fff;font-size:130%;padding-right:0;padding-left:0}.container-label[_ngcontent-c5]{border:2px solid #86c452;color:#86c452;font-size:75%!important;padding:1.5% 0}hr[_ngcontent-c5]{margin-top:1%;margin-bottom:1%}[class*=col-][_ngcontent-c5]{float:none;display:table-cell;vertical-align:middle;text-align:center}.row[_ngcontent-c5]{margin-bottom:0;width:100%;display:table}br[_ngcontent-c5]{line-height:0}.bnt-quit[_ngcontent-c5]{background-color:#c8007b;border-radius:0;color:#fff;padding-top:0;padding-bottom:0;width:95%;margin:auto;display:block}</style></head><body><app-root _nghost-c0="" ng-version="5.2.11"><div _ngcontent-c0="" class="app-container">

  <app-header _ngcontent-c0="" _nghost-c1=""><div _ngcontent-c1="" class="container header col-xs-12  col-sm-12 col-md-12 col-lg-12  col-xl-12">
  <div _ngcontent-c1="" class="header-content" style="padding:0!important">

    <div _ngcontent-c1="" class="col-xs-4  col-sm-4 col-md-4 col-lg-4  col-xl-4" style="padding:0!important; margin-top:3.781px;">
      <!---->
      <!---->
    </div>
    <div _ngcontent-c1="" class="col-xs-4  col-sm-4 col-md-4 col-lg-4  col-xl-4 title" style="padding:0!important">
      <label _ngcontent-c1="" style="margin-left: -50%;">CHECK VOISINAGE</label>
    </div>
    <div _ngcontent-c1="" class="container col-xs-1  col-sm-1 col-md-1 col-lg-1  col-xl-1 col-xs-offset-2  col-sm-offset-2 col-md-offset-2 col-lg-offset-2  col-xl-offset-2" style="padding:0!important">
      <img _ngcontent-c1="" class="logo" id="logo" src="logo.ico" aria-describedby="dx-16273258-95ba-c1cb-2504-b80ac625d41b" align="right">
    </div>
    
    <div _ngcontent-c1="" class="container col-xs-1  col-sm-1 col-md-1 col-lg-1  col-xl-1" style="padding:0!important">
      <img _ngcontent-c1="" id="logo" src="help-icon.png" aria-describedby="dx-16273258-95ba-c1cb-2504-b80ac625d41b" align="right">
    </div>

    <dx-tooltip _ngcontent-c1="" position="right" target="#logo" class="dx-overlay dx-popup dx-popover dx-tooltip dx-widget dx-visibility-change-handler dx-state-invisible"><div class="dx-overlay-content dx-popup-normal dx-state-invisible" style="width: auto; height: auto;" aria-hidden="true" id="dx-16273258-95ba-c1cb-2504-b80ac625d41b" role="tooltip"><div class="dx-popover-arrow"></div><div class="dx-popup-content"></div></div></dx-tooltip>
    <dx-popup _ngcontent-c1="" class="popup center dx-overlay dx-popup dx-widget dx-visibility-change-handler dx-state-invisible" showclosebutton="true"><div class="dx-overlay-content dx-popup-fullscreen dx-state-invisible" style="width: 100%; height: 100%;" aria-hidden="true" tabindex="0"><div class="dx-popup-content"></div></div></dx-popup>
  </div>
</div></app-header>

  <br _ngcontent-c0=""><br _ngcontent-c0=""><br _ngcontent-c0="">

  <alert _ngcontent-c0=""><!----></alert>
  
  <!---->
  <router-outlet _ngcontent-c0=""></router-outlet><home _nghost-c3=""><!---->


<!----><div _ngcontent-c3="" class="container" id="check-voisinage">
  <client-card _ngcontent-c3="" _nghost-c4=""><div _ngcontent-c4="" class="shadow">
  <div _ngcontent-c4="" class="row-eq-height container-title col-xs-12  col-sm-12 col-md-12 col-lg-12  col-xl-12" style="top:2%">
    <div _ngcontent-c4="" class="title col-xs-7  col-sm-7 col-md-7 col-lg-7  col-xl-7">
      <span _ngcontent-c4="" class="glyphicon glyphicon-user"></span> &nbsp; INTERVENTION
      <b _ngcontent-c4="">CLIENT</b>
    </div>
    <div _ngcontent-c4="" class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 status green-status"> Statut de la ligne :
      <b _ngcontent-c4="">OK</b>
    </div>
  </div>

  <div _ngcontent-c4="" class="container width-100">
    <div _ngcontent-c4="" class="form-group row">
      <div _ngcontent-c4="" class="col-xs-12  col-sm-12 col-md-12 col-lg-12  col-xl-12">
        <b _ngcontent-c4="">FYT :</b> FYT004988908 </div>
    </div>
    <div _ngcontent-c4="" class="form-group row">
      <div _ngcontent-c4="" class="col-xs-12  col-sm-12 col-md-12 col-lg-12  col-xl-12">
        <b _ngcontent-c4="">ADRESSE DU PM :</b> <?php echo strtoupper($_POST['addresse']) ;?>
      </div>
    </div>
    <div _ngcontent-c4="" class="form-group row">
      <button _ngcontent-c4="" class="btn btn-client-card" tabindex="0">
        <span _ngcontent-c4="" class="glyphicon glyphicon-plus"></span>
        Route optique
      </button>
    </div>
    <hr _ngcontent-c4="">
    <div _ngcontent-c4="" class="form-group row no-vertical-padding">
      <div _ngcontent-c4="" class="col-xs-6  col-sm-6 col-md-6 col-lg-6  col-xl-6">
        <label _ngcontent-c4="" class="col-xs-6  col-sm-6 col-md-6 col-lg-6  col-xl-6 labels">SRV ID :</label>
        <div _ngcontent-c4="" class="col-xs-6  col-sm-6 col-md-6 col-lg-6  col-xl-6  labels">
          32717127
        </div>
      </div>
      <div _ngcontent-c4="" class="col-xs-6  col-sm-6 col-md-6 col-lg-6  col-xl-6">
        <label _ngcontent-c4="" class="col-xs-6  col-sm-6 col-md-6 col-lg-6  col-xl-6 labels">ONT ID :</label>
        <div _ngcontent-c4="" class="col-xs-6  col-sm-6 col-md-6 col-lg-6  col-xl-6 labels">
          8
        </div>
      </div>
    </div>
    <hr _ngcontent-c4="">
    <div _ngcontent-c4="" class="row row-eq-height indicators">
      <div _ngcontent-c4="" class="col-xs-4  col-sm-4 col-md-4 col-lg-4  col-xl-4 col-sm-4 container no-side-padding row-eq-height margins center" style="margin-left:5%; line-height:210%;">
        &nbsp; SYNCHRO
        <span _ngcontent-c4="" class="framed center green-status"> OK</span>
      </div>
      <div _ngcontent-c4="" class="col-xs-4  col-sm-4 col-md-4 col-lg-4  col-xl-4 col-sm-4 container no-side-padding row-eq-height margins center" style="line-height:210%;">
        &nbsp; ETAT ONT
        <span _ngcontent-c4="" class="framed green-status">ON </span>
      </div>
      <div _ngcontent-c4="" class="col-xs-4  col-sm-4 col-md-4 col-lg-4  col-xl-4 col-sm-4 container no-side-padding row-eq-height margins center" style="margin-right:5%;line-height:210%;">
        &nbsp; STATUT PORT
        <span _ngcontent-c4="" class="framed green-status"> OK </span>
      </div>
    </div>

    <hr _ngcontent-c4="">
    <h5 _ngcontent-c4=""> Puissances Optiques </h5>
    <hr _ngcontent-c4="">
    <div _ngcontent-c4="" class="margin-up-down">
      <div _ngcontent-c4="" class="row">
        <div _ngcontent-c4="" class="col-xs-3  col-sm-3 col-md-3 col-lg-3  col-xl-3" style="padding-right:0; ">
          <div _ngcontent-c4="" style="float:left;">
            <b _ngcontent-c4="">Up</b> OLT:</div>
        </div>
        <div _ngcontent-c4="" class="col-xs-3  col-sm-3 col-md-3 col-lg-3  col-xl-3" style="padding-left: 0;">
          <div _ngcontent-c4="" style="float:left;">
            <b _ngcontent-c4="" class="green">5.3 dBm</b>
          </div>
        </div>

        <div _ngcontent-c4="" class="col-xs-3  col-sm-3 col-md-3 col-lg-3  col-xl-3" style="padding-right:0; ">
          <div _ngcontent-c4="" style="float:left;">
            <b _ngcontent-c4="">Down</b> OLT:</div>
        </div>

        <div _ngcontent-c4="" class="col-xs-3  col-sm-3 col-md-3 col-lg-3  col-xl-3" style="padding-left: 0;">
          <div _ngcontent-c4="" style="float:left;">
            <b _ngcontent-c4="" class="green"> -18.7 dBm</b>
          </div>
        </div>
      </div>
    </div>
    <br _ngcontent-c4="">
    <div _ngcontent-c4="" class="row">
      <div _ngcontent-c4="" class="col-xs-3  col-sm-3 col-md-3 col-lg-3  col-xl-3" style="padding-right:0; ">
        <div _ngcontent-c4="" style="float:left;">
          <b _ngcontent-c4="">Up</b> ONT:
        </div>
      </div>
      <div _ngcontent-c4="" class="col-xs-3  col-sm-3 col-md-3 col-lg-3  col-xl-3" style="padding-left: 0;">
        <div _ngcontent-c4="" style="float:left;">
          <b _ngcontent-c4="" class="green"> 2.27 dBm </b>
        </div>
      </div>
      <div _ngcontent-c4="" class="col-xs-3  col-sm-3 col-md-3 col-lg-3  col-xl-3" style="padding-right:0; ">
        <div _ngcontent-c4="" style="float:left;">
          <b _ngcontent-c4="">Down</b> ONT:
        </div>
      </div>
      <div _ngcontent-c4="" class="col-xs-3  col-sm-3 col-md-3 col-lg-3  col-xl-3" style="padding-left: 0;">
        <div _ngcontent-c4="" style="float:left;">
          <b _ngcontent-c4="" class="green"> -15.36 dBm </b>
        </div>
      </div>

    </div>
    <!---->
    
    <div _ngcontent-c4="" class="form-group row" style="margin-bottom:3%;">
      <button _ngcontent-c4="" class="btn btn-client-card" tabindex="0">
        <span _ngcontent-c4="" class="glyphicon glyphicon-search"></span>&nbsp;Check unitaire de l'intervention</button>
    </div>
  </div>
</div></client-card>
  <!----><div _ngcontent-c3="" style="font-size: 80%;">
    Info à <?php echo date("d/m/Y H:i:s"); ?>, 0 Clients Pertubés, <?php echo $_POST['nbClients'] ?> Non Pertubés
  </div>
  <div _ngcontent-c3="" style="margin:3% 0 0% 0;">
    <!---->
  </div>
  
  <!----><check-ok _ngcontent-c3="" id="check-ok" _nghost-c5=""><div _ngcontent-c5="" class="container">
  <div _ngcontent-c5="" class=" col-xs-3  col-sm-3 col-md-3 col-lg-3  col-xl-3 container-fluid client-icon-container">
    <span _ngcontent-c5="" class="glyphicon glyphicon-thumbs-up"></span>
    <br _ngcontent-c5="">
  </div>
  <div _ngcontent-c5="" class=" col-xs-1  col-sm-1 col-md-1 col-lg-1  col-xl-1 span-6"></div>
  <div _ngcontent-c5="" class="container-label col-xs-8  col-sm-8 col-md-8 col-lg-8  col-xl-8">
    <b _ngcontent-c5="">AUCUNE PERTURBATION </b> N'A ETE DETECTEE SUR LES LIGNES INTERNET VOISINES
  </div>
</div>
<br _ngcontent-c5="">

</check-ok>
  

  <!----><div _ngcontent-c3="" class="shadow font">
    
    <!---->
    <!---->
  </div>
  <br _ngcontent-c3="">
  
  <!---->
  
</div>
<br _ngcontent-c3=""></home>
