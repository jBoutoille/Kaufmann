<?php ob_start(); ?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
    <title>Inscription à la Newsletter | Cabinet G.KAUFMANN</title>
    <style>     
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; 
        width: 30vh;
        display: block;
        right: 0;
        left: 0;
        margin: auto;
        margin-bottom: 3vh;
      }

      body {
        background-color: #0f245b;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; 
      }

      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; 
      }

      .body {
        background-color: #0f245b;
        width: 100%; 
      }

      .container {
        display: block;
        margin: 0 auto !important;
        max-width: 580px;
        padding: 10px;
        width: 580px; 
      }

      .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 580px;
        padding: 10px; 
      }

      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%; 
      }

      .wrapper {
        box-sizing: border-box;
        padding: 20px; 
      }

      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }

      .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%; 
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; 
      }

      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px; 
      }

      h1 {
        font-size: 3vh;
        font-weight: 300;
        text-align: left;
        margin-bottom:3vh;
      }

      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 2.5vh;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px; 
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; 
      }

      a {
        color: rgba(11,36,91);
        text-decoration: underline; 
      }

      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; 
      }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center; 
      }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
      }

      .btn-primary table td {
        background-color: #3498db; 
      }

      .btn-primary a {
        background-color: rgba(11,36,91);
        border:none;
        color: #ffffff; 
      }

      .last {
        margin-bottom: 0; 
      }

      .first {
        margin-top: 0; 
      }

      .align-center {
        text-align: center; 
      }

      .align-right {
        text-align: right; 
      }

      .align-left {
        text-align: left; 
      }

      .clear {
        clear: both; 
      }

      .mt0 {
        margin-top: 0; 
      }

      .mb0 {
        margin-bottom: 0; 
      }

      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; 
      }

      .powered-by a {
        text-decoration: none; 
      }

      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0; 
      }

      p {
            margin-bottom:6vh;
      }

      .confirmBtn {
            margin-bottom:3vh;
      }
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 4vh !important;
          margin-bottom: 10px !important; 
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 3vh !important; 
        }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; 
        }
        table[class=body] .content {
          padding: 0 !important; 
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; 
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; 
        }
        table[class=body] .btn table {
          width: 100% !important; 
        }
        table[class=body] .btn a {
          width: 100% !important; 
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; 
        }
      }
      @media all {
        .ExternalClass {
          width: 100%; 
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; 
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; 
        }
        #MessageViewBody a {
          color: inherit;
          text-decoration: none;
          font-size: inherit;
          font-family: inherit;
          font-weight: inherit;
          line-height: inherit;
        }
        .btn-primary table td:hover {
          background-color: #34495e !important; 
        }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; 
        } 
      }
    </style>
  </head>
  <body class="">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <table role="presentation" class="main">
              <tr>
                <td class="wrapper">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <a href="#"><img src="../../public/img/logo/logo3blue.png"></a>
                        <h1>Confirmation d'inscription à la Newsletter</h1>
                        <p>Vous venez de remplir le formulaire d'inscription à la Newsletter du cabinet G.KAUMANN. Pour confirmer votre inscription et ainsi recevoir notre actualité, merci de cliquer sur le bouton çi dessous :</p>
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table role="presentation" class="confirmBtn" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td><a href="<?= $RConfig['configURL'] ?>?action=confirmNewsletter&id=<?= $token ?>" target="_blank">Confirmer mon inscription</a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <p>Si vous ne parvenez pas à cliquer sur le bouton, vous pouvez confirmer votre inscription avec ce lien :
                            <br>
                            <a href="<?= $RConfig['configURL'] ?>?action=confirmNewsletter&id=<?= $token ?>" target="_blank"><?= $RConfig['configURL'] ?>?action=confirmNewsletter&id=<?= $token ?></a>
                        </p>
                        <p>Ce n'est pas vous ? <a href="<?= $RConfig['configURL'] ?>?action=deleteNewsletter&id=<?= $token ?>" target="_blank">Cliquez ici</a> pour supprimer la demande d'inscription.</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <div class="footer">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block">
                    <span class="apple-link">© 2019 <a href="#">G.KAUFMANN</a>
                    </span>
                  </td>
                </tr>
              </table>
            </div>
        </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
<?php 
    $mailContent = ob_get_clean();
    $mailContentText = 
    "Confirmation d'inscription à la Newsletter
    
    Vous venez de remplir le formulaire d'inscription à la Newsletter du cabinet G.KAUFMANN. Pour confirmer votre inscription et ainsi recevoir notre actualité, allez sur ce lien :
    " . $RConfig['configURL'] . "?action=confirmNewsletter&id=" . $token . "

    Si ce n'est pas vous, allez sur ce lien pour supprimer la demande d'inscription à la Newsletter :
    " . $RConfig['configURL'] . "?action=confirmNewsletter&id=" . $token . "
    "
    ;
?>