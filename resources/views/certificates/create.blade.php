@extends('layouts.app')

@section('css')
    <style type="text/css">
        .print-content * {
            margin: 0;
            padding: 0;
            text-indent: 0;
        }

        .print-content .s1 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .print-content .s3 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .print-content .s4 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: underline;
            font-size: 10pt;
        }

        .print-content .s5 {
            color: black;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .print-content .s6 {
            color: black;
            font-family: Calibri, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
            vertical-align: 3pt;
        }

        .print-content .s7 {
            color: black;
            font-family: Calibri, sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .print-content .s8 {
            color: black;
            font-family: Calibri, sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
            vertical-align: 3pt;
        }

        .print-content h1 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .print-content .s9 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .print-content .s10 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .print-content p {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            /*text-decoration: underline;*/
            font-size: 9pt;
            margin: 0pt;
        }

        .print-content .s11 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .print-content .s12 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .print-content .s14 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .print-content .input-print {
            border: none;
            border-bottom: 1px solid black;
            background: inherit;
            width: 75%;
            font-family: "Times New Roman", serif;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .col-print-1 {width:8%;  float:left;}
        .col-print-2 {width:16%; float:left;}
        .col-print-3 {width:25%; float:left;}
        .col-print-4 {width:33%; float:left;}
        .col-print-5 {width:42%; float:left;}
        .col-print-6 {width:50%; float:left;}
        .col-print-7 {width:58%; float:left;}
        .col-print-8 {width:66%; float:left;}
        .col-print-9 {width:75%; float:left;}
        .col-print-10 {width:83%; float:left;}
        .col-print-11 {width:92%; float:left;}
        .col-print-12 {width:100%; float:left;}
    </style>
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Create Certificate of Non Conviction <button class="btn btn-primary" type="button" onclick="window.print()">Print</button>
        </h1>
    </section>
    <div class="content print-content">
        @include('adminlte-templates::common.errors')
        {{--<div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'certificates.store']) !!}

                        @include('certificates.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>--}}

        <div class="row">
            <div class="col-print-12">

                <div class="row">
                    <div class="col-print-6 text-center">
                        <p class="s1" style="padding-top: 7pt;text-indent: 0pt;">REPUBLIQUE DU
                            CAMEROUN</p>
                        <p class="s1" style="text-indent: 0pt;">Paix<u>-Travail-Pa</u>trie</p>
                        <p class="s3" style="text-indent: 0pt;">COUR<u> D’APPEL DE</u> SUD OUEST</p>
                        <p class="s3">TRIBUNAL DE PREMIER INSTANCE DE KUMBA</p>
                        <p class="s3" style="text-indent: 0pt;">CAS<u>IER JUDIC</u>IARE</p>
                    </div>
                    <div class="col-print-6 text-center">
                        <p class="s1" style="padding-top: 3pt;text-indent: 0pt;">REPUBLIC OF CAMEROON</p>
                        <p class="s1" style="text-indent: 0pt;">Peace-<u>Work-Fath</u>erland</p>
                        <p><span class="s3">COURT OF </span><span class="s4">APPEAL OF SOUTH</span><span class="s3"> </span><span
                                class="s3">WEST</span></p>
                        <p class="s3" style="text-indent: 0pt;">COURT OF FIRST INSTANCE OF <br><u>KUMBA</u>
                        </p>
                    </div>
                </div>


{{--                <p style="text-indent: 0pt;text-align: left;"><br/></p>--}}
                <div style="display: inline-block;">
                    <p class="s5" style="padding-top: 5pt;padding-left: 67pt;text-indent: 0pt;text-align: left;">NO
                        <span style="padding-left: 50pt">/GTP|</span>
                    </p>
                    <p class="s5" style="text-indent: 0pt;padding-left: 133pt;">/CFIR</p>
                </div>

{{--                <p style="text-indent: 0pt;text-align: left;"><br/></p>--}}
                <p class="s5" style="padding-left: 186pt;text-indent: 0pt;text-align: left;">BULLETIN N<span class="s6">o </span>3
                </p>
                <p class="s7" style="padding-left: 186pt;text-indent: 0pt;text-align: left;">BULLETIN N<span class="s8">o </span>3
                </p>
                <h1 style="padding-left: 67pt;text-indent: 0pt;text-align: left;">Relevé des condemnation à des peines
                    privatives de
                    liberté non effacées par l’amnistie ou la rehabilitation et des condamnations relatives à la circulation
                    routière
                    art. 581 (1) (C)</h1>
                <p class="s9" style="padding-left: 67pt;text-indent: 0pt;text-align: left;">Information sheet on imprisonment
                    not
                    expunged by amnesty or rehabilitation and on penalties related to traffic offences Sect. 581 (1) (C)</p>
                <p style="text-indent: 0pt;text-align: left;"><br/></p>

                <p class="s10" style="padding-left: 67pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Concernant M.
                    <input class="input-print" type="text">
                    <u> </u>
                </p>
                <p class="s11" style="padding-left: 67pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Concerning M.</p>
                <p style="text-indent: 0pt;text-align: left;"><br/></p>

                <p class="s10" style="padding-left: 67pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Fils/fille de
                    <input class="input-print" style="width: 77%;" type="text">
                </p>
                <p class="s11" style="padding-left: 67pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Son/Daughter
                    of</p>
                <p style="text-indent: 0pt;text-align: left;"><br/></p>

                <p class="s10" style="padding-left: 67pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Et de
                    <input class="input-print" style="width: 81%;" type="text">
                </p>
                <p class="s11" style="padding-left: 67pt;text-indent: 0pt;line-height: 10pt;text-align: left;">And of</p>
                <p style="text-indent: 0pt;text-align: left;"><br/></p>
                <div class="row">
                    <div class="col-print-4">
                        <p class="s10" style="padding-left: 67pt;text-indent: 0pt;text-align: left;">Né(e) le
                            <input class="input-print" style="width: 65%;" type="text">
                        </p>
                        <p class="s11" style="padding-left: 67pt;text-indent: 0pt;text-align: left;">Born on
                        </p>
                    </div>
                    <div class="col-print-8">
                        <p class="s10" style="text-indent: 0pt;text-align: left;">à
                            <input class="input-print" style="width: 79%;" type="text">
                        </p>
                        <p class="s11" style="text-indent: 0pt;text-align: left;"><span class="s10">at</span>
                        </p>
                    </div>
                </div>

                <p style="text-indent: 0pt;text-align: left;"><br/></p>
                <p class="s10" style="padding-left: 67pt;text-indent: 0pt;text-align: left;">Domicilé (e) à
                    <input class="input-print" style="width: 75%;" type="text">
                </p>
                <p class="s11" style="padding-left: 67pt;text-indent: 0pt;text-align: left;">Residence at</p>
                <p style="text-indent: 0pt;text-align: left;"><br/></p>
                <p class="s10" style="padding-left: 67pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Etat civil et de famille
                    <input class="input-print" style="width: 70%;" type="text">
                </p>
                <p class="s11" style="padding-left: 67pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Civil status</p>

                {{--<p style="text-indent: 0pt;text-align: left;"><br/></p>
                <p class="s10" style="padding-left: 67pt;text-indent: 0pt;line-height: 21pt;text-align: left;">Profession
                    <input class="input-print" style="width: 75%;" type="text">
                </p>--}}

                <p style="text-indent: 0pt;text-align: left;"><br/></p>
                <p class="s10" style="padding-left: 67pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Profession
                    <input class="input-print" style="width: 77%;" type="text">
                </p>
                <p class="s11" style="padding-left: 67pt;text-indent: 0pt;line-height: 10pt;text-align: left;"></p>

                <p style="text-indent: 0pt;text-align: left;"><br/></p>
                <p class="s10" style="padding-left: 67pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Nationalité
                    <input class="input-print" style="width: 77%;" type="text">
                </p>
                <p class="s11" style="padding-left: 67pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Nationality</p>

                <p style="text-indent: 0pt;text-align: left;"><br/></p>
                <table style="border-collapse:collapse;margin-left:5.75pt" cellspacing="0">
                    <tr style="height:94pt">
                        <td style="width:86pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s12" style="padding-left: 5pt;padding-right: 4pt;text-indent: 0pt;text-align: left;">Date
                                de(s)
                                condemnation(s)</p>
                            <p style="text-indent: 0pt;text-align: left;"><br/></p>
                            <p class="s12"
                               style="padding-top: 8pt;padding-left: 5pt;padding-right: 4pt;text-indent: 0pt;text-align: left;">
                                Date of
                                Conviction(s)</p></td>
                        <td style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s12" style="padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;text-align: left;">Cours
                                ou
                                Tribunaux</p>
                            <p style="text-indent: 0pt;text-align: left;"><br/></p>
                            <p class="s12" style="padding-top: 8pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                                Courts</p></td>
                        <td style="width:112pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s12" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Nature
                                des
                                infractions</p>
                            <p class="s12" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                -Crimes</p>
                            <p class="s12" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                -Délits</p>
                            <p class="s12" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                -Contraventions</p>
                            <p style="text-indent: 0pt;text-align: left;"><br/></p>
                            <p class="s12" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Nature
                                of
                                offences</p>
                            <p class="s12" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                -Felonies</p>
                            <p class="s12" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                -Misdemeanours</p>
                            <p class="s12" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                -Simple
                                offences</p></td>
                        <td style="width:95pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s12" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Date precise de
                                Commission de
                                (s) Infraction (s)</p>
                            <p style="text-indent: 0pt;text-align: left;"><br/></p>
                            <p class="s12" style="padding-left: 5pt;padding-right: 33pt;text-indent: 0pt;text-align: justify;">
                                Precise
                                date of Commission of Offence (s)</p></td>
                        <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s12" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Date
                                et
                                nature</p>
                            <p class="s12" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">de (s)
                                mandate
                                (s)</p>
                            <p style="text-indent: 0pt;text-align: left;"><br/></p>
                            <p class="s12"
                               style="padding-top: 8pt;padding-left: 5pt;padding-right: 15pt;text-indent: 0pt;text-align: left;">
                                Date
                                and type (s) of warrant (s)</p></td>
                        <td style="width:127pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p class="s12" style="padding-left: 5pt;padding-right: 1pt;text-indent: 0pt;text-align: left;">
                                Observations
                                condamnationation relatives à la</p>
                            <p class="s12" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">circulation routèire</p>
                            <p style="text-indent: 0pt;text-align: left;"><br/></p>
                            <p class="s12" style="padding-left: 5pt;padding-right: 47pt;text-indent: 0pt;text-align: left;">
                                Remarks
                                conviction on traffic offences</p></td>
                    </tr>
                    <tr style="height:64pt">
                        <td style="width:86pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        <td style="width:81pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        <td style="width:112pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        <td style="width:95pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        <td style="width:127pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                            <p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                    </tr>
                </table>
                <p style="text-indent: 0pt;text-align: left;"><br/></p>
                <table style="border-collapse:collapse;margin-left:10.5pt" cellspacing="0">
                    <tr style="height:16pt">
                        <td style="width:123pt"><p class="s12"
                                                   style="padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                Coût
                                du bulletin</p></td>
                        <td style="width:197pt"><p class="s12"
                                                   style="padding-left: 43pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                Vu au
                                Parquet le<span style="border-bottom: 1px dotted;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>.</p></td>
                        <td style="width:111pt"><p class="s12"
                                                   style="padding-left: 19pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                Pour
                                extrait conforme</p></td>
                    </tr>
                    <tr style="height:21pt">
                        <td style="width:123pt"><p class="s12"
                                                   style="padding-top: 5pt;padding-left: 2pt;text-indent: 0pt;text-align: left;">
                                Cost of
                                Bulletin</p></td>
                        <td style="width:197pt"><p class="s12"
                                                   style="padding-top: 5pt;padding-left: 42pt;text-indent: 0pt;text-align: left;">
                                Approved by the Department on</p></td>
                        <td style="width:111pt"><p class="s12"
                                                   style="padding-top: 5pt;padding-left: 20pt;text-indent: 0pt;text-align: left;">
                                Certified copy</p></td>
                    </tr>
                    <tr style="height:31pt">
                        <td style="width:123pt"><p class="s12"
                                                   style="padding-top: 5pt;padding-left: 2pt;padding-right: 41pt;text-indent: 0pt;text-align: left;">
                                Recherche et redactor Search and draftin</p></td>
                        <td style="width:197pt"><p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        <td style="width:111pt"><p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:123pt"><p class="s12"
                                                   style="padding-top: 5pt;padding-left: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                Timbre du Tribunal</p></td>
                        <td style="width:197pt"><p class="s14"
                                                   style="padding-top: 5pt;padding-left: 44pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                Le Procureur de la République</p></td>
                        <td style="width:111pt"><p class="s14"
                                                   style="padding-top: 5pt;padding-left: 16pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                Le Greffier en Chef</p></td>
                    </tr>
                    <tr style="height:16pt">
                        <td style="width:123pt"><p class="s12"
                                                   style="padding-left: 4pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                Court’s stamp</p></td>
                        <td style="width:197pt"><p class="s12"
                                                   style="padding-left: 44pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                The
                                State Counsel</p></td>
                        <td style="width:111pt"><p class="s12"
                                                   style="padding-left: 17pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                The
                                Registrar – in - chief</p></td>
                    </tr>
                    <tr style="height:26pt">
                        <td style="width:123pt"><p class="s12"
                                                   style="padding-top: 5pt;padding-left: 2pt;padding-right: 81pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                Prix Total: Total cost</p></td>
                        <td style="width:197pt"><p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                        <td style="width:111pt"><p style="text-indent: 0pt;text-align: left;"><br/></p></td>
                    </tr>
                </table>

            </div>
        </div>

    </div>
@endsection

