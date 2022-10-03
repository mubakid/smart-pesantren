<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Nota Pembayaran </title>
    <link rel="icon" type="image/png" sizes="16x16"
        href="http://ryopercetakan.ptryodigitalprinting.com/assets/plugins/images/favicon.png">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0;" />
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

        body {
            margin: 0;
            padding: 0;
            background: #fff;
        }

        div,
        p,
        a,
        li,
        td {
            -webkit-text-size-adjust: none;
        }

        .ReadMsgBody {
            width: 100%;
            background-color: #ffffff;
        }

        .ExternalClass {
            width: 100%;
            background-color: #ffffff;
        }

        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }

        html {
            width: 100%;
        }

        p {
            padding: 0 !important;
            margin-top: 0 !important;
            margin-right: 0 !important;
            margin-bottom: 0 !important;
            margin-left: 0 !important;
        }

        .visibleMobile {
            display: none;
        }

        .hiddenMobile {
            display: block;
        }

        @media only screen and (max-width: 600px) {
            body {
                width: auto !important;
            }

            table[class=fullTable] {
                width: 100% !important;
                clear: both;
            }

            table[class=fullPadding] {
                width: 100% !important;
                clear: both;
            }

            table[class=col] {
                width: 100% !important;
            }

            .erase {
                display: none;
            }

        }

        @media only screen and (max-width: 420px) {
            table[class=fullTable] {
                width: 100% !important;
                clear: both;
            }

            table[class=fullPadding] {
                width: 100% !important;
                clear: both;
            }

            table[class=col] {
                width: 100% !important;
                clear: both;
            }

            table[class=col] td {
                text-align: left !important;
            }

            .erase {
                display: none;
                font-size: 0;
                max-height: 0;
                line-height: 0;
                padding: 0;
            }

            .visibleMobile {
                display: block !important;
            }

            .hiddenMobile {
                display: none !important;
            }

            .container-invoice {
                width: 70% !important;
                padding: 1rem 2rem !important;
            }

            .text-order {
                margin-bottom: 10px !important;
            }
        }

        .semi-circle {
            /*margin: 1rem auto;*/
            /*background-color: #48abe0;*/
            width: 100%;
            /*height: 30rem;*/
            /*background-color: #FF0101;*/
            /*border-radius: 0 0 20% 40%/0 0 20% 40%;*/
            position: absolute;
            /*top: 10px;*/
            z-index: 20;
            /*background: rgba(255, 255, 255, 0.9);*/
            left: 0;
        }

        .body {
            position: relative;
        }

        #laundry {
            background-color: #32a852;
            min-height: 260px;
            padding-bottom: 50px;
            z-index: 99;
        }

        #laundry+svg .curvy {
            fill: #32a852;
            opacity: 0.9;
        }

    </style>
</head>

<body style="position: relative; background: #fffafa;">
    <div style="position: relative;">
        <div id="laundry"></div>
        <svg viewBox="50 90 100 10" xmlns="http://www.w3.org/2000/svg" class="semi-circle">
            <ellipse cx="100" cy="50" rx="100" ry="50" class="curvy"></ellipse>
        </svg>
        <div
            style="display: flex; justify-content: center; padding-bottom: 2rem !important; width: 100%; top: 20px; position: absolute; z-index: 999;">
            <div class="container-invoice"
                style="width: 480px; background-color: #ccc; margin: 20px auto; padding: 2rem 4rem; border-radius: 10px; background-color: #ffffff;box-shadow: 0 1px 2px rgba(0,0,0,0.07), 0 2px 4px rgba(0,0,0,0.07), 0 4px 8px rgba(0,0,0,0.07), 0 8px 16px rgba(0,0,0,0.07),0 16px 32px rgba(0,0,0,0.07), 0 32px 64px rgba(0,0,0,0.07); margin-bottom: 20px;">

                <div style="display: flex; justify-content: space-between; margin-bottom: 2rem;">
                    <img src="https://mubakid.or.id/wp-content/uploads/2019/01/LOGO-PPMU-PNG-Copy-300x300.png"
                        height="60" alt="logo" border="0" />
                    <p
                        style="font-size: 21px; color: #ff0000; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right; font-weight: bold;">
                        Invoice</p>
                </div>

                <div>
                    <p class="text-order"
                        style="font-size: 12px; font-family: 'Open Sans'; margin: 0; text-align: right;">No Nota
                        N{{ date('dmy') . $trx->id }}
                        {{-- <br> {{ date('d-m-Y') }} --}}

                    </p>
                </div>

                <div style="">
                    <h3 style="font-family: 'Open Sans'; margin: 0; ">PP. MIftahul Ulum
                    </h3><br>


                    <p style="font-size: 12px; font-family: 'Open Sans';">Atas Nama : <br />{{ $trx->user->name }}
                        <br>
                </div>

                <div style="display: flex; justify-content: space-between; margin-bottom: 2rem;">
                    <div>
                        <h4 style="font-family: 'Open Sans'; font-size: 12px; font-weight: bold; color: #5B5B5B;">
                            BILLING INFORMATION</h4>
                        <p style="font-size: 12px; font-family: 'Open Sans'; margin: 0; text-align: left;">Kode:
                            {{ $trx->reference }}<br>
                            Tgl: {{ Carbon\Carbon::parse($trx->created_at)->format('d-m-Y') }}<br>
                            <br>
                        </p>
                    </div>
                    <div>
                        <h4
                            style="font-family: 'Open Sans'; font-size: 12px; font-weight: bold; text-align: right; color: #5B5B5B;">
                            PAYMENT METHOD</h4>
                        <p style="font-size: 12px; font-family: 'Open Sans'; margin: 0; text-align: right;">
                            @if ($trx->is_cash == true)
                                CASH
                            @else
                                TRANSFER
                                @endif <br> Status Pembayaran: <u style="color: #ff0000;">
                                    @if ($trx->status == 'paid')
                                        LUNAS
                                    @else
                                        BELUM DIBAYAR
                                    @endif
                                </u>
                        </p>
                    </div>
                </div>

                <div style="margin-bottom: 1rem;">
                    <!-- Order Details -->
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody>
                            <tr>
                                <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;"
                                    width="52%" align="left">
                                    Keperluan
                                </th>
                                <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                                    align="center">

                                </th>
                                <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                                    align="right">

                                </th>
                                <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                                    align="right">
                                    Nominal
                                </th>
                            </tr>
                            <tr>
                                <td height="1" style="background: #bebebe;" colspan="4"></td>
                            </tr>

                            {{-- disini foreach --}}
                            @foreach ($products as $pro)
                                <tr>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; vertical-align: top; padding:10px 0;"
                                        class="article">
                                        <p style="color: #ff0000;line-height: 18px;">{{ $pro->name }}</p>
                                        <p style="color: #2E2E2E;">
                                            {{ $pro->note }} </p>
                                    </td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                                        align="center"> </td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                                        align="right"></td>
                                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                                        align="right">Rp. {{ number_format($pro->amount) }}</td>
                                </tr>
                                <tr>
                                    <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- /Order Details -->
                </div>

                <div>
                    <!-- Table Total -->
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody>
                            <tr>
                                <td
                                    style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                    Total
                                </td>
                                <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; white-space:nowrap;"
                                    width="80">
                                    Rp. {{ number_format($total) }} </td>
                            </tr>
                            <tr>
                                <td
                                    style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                    Bayar
                                </td>
                                <td
                                    style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">


                                    @if ($trx->status == 'paid')
                                        Rp. {{ number_format($total) }}
                                    @else
                                        Rp. 0
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                    <strong>Kembali</strong>
                                </td>
                                <td
                                    style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                    <strong>
                                        @if ($trx->status == 'paid')
                                            Rp. 0
                                        @else
                                            - Rp. {{ number_format($total) }}
                                        @endif

                                    </strong>
                                </td>
                            </tr>
                            <!-- <tr>
                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #b0b0b0; line-height: 22px; vertical-align: top; text-align:right; "><small>TAX</small></td>
                    <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #b0b0b0; line-height: 22px; vertical-align: top; text-align:right; ">
                      <small>$72.40</small>
                    </td>
                  </tr> -->
                        </tbody>
                    </table>
                    <!-- /Table Total -->
                </div>

                <div>
                    <p
                        style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                        Terima Kasih.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
