var d = ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31']
var F = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
var FtoBr = { Jan: 'Jan', Feb: 'Fev', Mar: 'Mar', Apr: 'Abr', May: 'Mai', Jun: 'Jun', Jul: 'Jul', Aug: 'Ago', Sep: 'Set', Oct: 'Out', Nov: 'Nov', Dez: 'Dez' };
var w = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
var wToBr = { Sunday: 'Domingo', Monday: 'Segunda-feira', Tuesday: 'Terça-feira', Wednesday: 'Quarta-feira', Thursday: 'Quinta-feira', Friday: 'Sexta-feira', Saturday: 'Sábado' };
var H = ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23'];
var i = ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59'];
var s = ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59'];

/* PDF */
$("#downloadPdf").click(function() {
    vibrateClick()

    html2canvas(document.querySelector("#highcharts-full")).then(canvas => {
        var date = new Date();
        var doc = new jsPDF("p", "pt", "letter");
        var img = new Image()
        img.src = 'img/smart-logo-dark.png'

        // doc.addImage(img, 'png', 20, 20, 170, 50)

        var body = "";
        body += '<p style="width: 100px;" >This demo uses Html2Canvas.js to render HTML. <br />Instead of using an HTML canvas however, a canvas wrapper using jsPDF is substituted. The <em>context2d</em> provided by the wrapper calls native PDF rendering methods.</p><p>A PDF of this page will be inserted into the right margin.</p><h2>Colors</h2>'
        doc.html(body, { callback: function(pdf) { pdf.save('datauristring.pdf'); } });
        // doc.setTextColor(0, 0, 0);   
        // doc.text(30, 90, "");       
        // doc.setFontSize(10);     
        // doc.setFontType("bold");   
        // doc.text(15, 95, "Gerado por: ");     
        // doc.setFontType("normal");       
        // doc.text(36, 95, $('[name="profile"]').html())  
        // doc.setFontType("bold");    
        // doc.text(15, 100, "Dia de expedição: ");        
        // doc.setFontType("normal");        
        // doc.text(46, 100, w[date.getDay()] + ', ' + d[date.getDate()] + ' de ' + F[date.getMonth()] + ' de ' + date.getFullYear())
        // doc.setFontType("bold");
        // doc.text(15, 105, "Horário de expedição: ");
        // doc.setFontType("normal");
        // doc.text(53, 105, H[date.getHours()] + ':' + i[date.getMinutes()] + ':' + s[date.getSeconds()])

        // var imgData = canvas.toDataURL('image/png');
        // const imgProps = doc.getImageProperties(imgData);
        // const pdfWidth = doc.internal.pageSize.getWidth();
        // const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;

        // doc.addImage(imgData, 'png', 0, 150, pdfWidth, pdfHeight);
        // // Save the PDF
        // doc.save($('[name="condominio"]').val().toLowerCase().replace(" ", "_") + '_' + $('[name="ambiente"]').html().toLowerCase().replace(" ", "_") + ".pdf");
    });
});

/* EXCEL */

$("#downloadExcel").click(function() {
    vibrateClick()
    var watt = [],
        week = [],
        hourt = [];
    $('#highcharts-full .highcharts-point').each(function(index) {
        // console.log($(this).attr("aria-label"))
        week[index] = $(this).attr("aria-label").substring($(this).attr("aria-label").indexOf(" ") + 1, $(this).attr("aria-label").indexOf(":") - 4)
        hourt[index] = $(this).attr("aria-label").substring($(this).attr("aria-label").indexOf(":") - 3, $(this).attr("aria-label").indexOf(":") + 6)
        watt[index] = $(this).attr("aria-label").substring($(this).attr("aria-label").indexOf(":") + 7, $(this).attr("aria-label").length - 1)
    })

    var date = new Date();

    var dadosXls = "";
    dadosXls += '<table cellspacing="0" border="0" id="tblExport"><colgroup width="186"></colgroup><colgroup width="197"></colgroup><colgroup width="150"></colgroup><tbody>'
    dadosXls += '<tr><td colspan="11" align="left" valign="middle" bgcolor="#000000"><b><font face="arial" size="4" color="#CE181E"><font color="#000000">Smart Control</font> Pro</font></b></td>    <td height="23" align="left" valign="middle" bgcolor="#000000" weight="100"><font face="arial" size="4" color="#000000"></font></td>    <td align="left" bgcolor="#000000"><b><font face="arial" size="3" color="#000000"><br></font></b></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td></tr>'
    dadosXls += '<tr><td colspan="11" height="23" align="left" valign="middle" bgcolor="#000000" weight="100"><font face="arial" size="4" color="#000000">Relatório de Gráficos</font></td><td align="center" valign="middle" bgcolor="#000000"></td><td align="left" bgcolor="#000000"><b><font face="arial" size="3" color="#000000"><br></font></b></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td><td align="left" bgcolor="#000000"><br></td></tr>'
    dadosXls += '<tr><td height="18" align="left" bgcolor="#1368A9"><b><font face="arial" color="#000000">Nome do condomínio:</font></b></td><td align="left" bgcolor="#1368A9"><b><font face="arial" color="#000000">Local Monitorado:</font></b></td><td align="left" bgcolor="#1368A9"><b><font face="arial" color="#000000">Filtro:</font></b></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td></tr>'
    dadosXls += '<tr><td height="18" align="left" bgcolor="#000000"><font face="arial">' + $('[name="condominio"]').val() + '</font></td><td align="left" bgcolor="#000000"><font face="arial">' + $('[name="ambiente"]').html() + '</font></td><td colspan="9" align="left" valign="middle" bgcolor="#000000"><font face="arial">' + $('[name="filtro"]').html() + '</font></td></tr>'
    dadosXls += '<tr><td></td></tr>'
    dadosXls += '<tr><td height="20" align="left" bgcolor="#1368A9"><b><font face="arial" size="2" color="#000000">Gerado por:</font></b></td><td align="left" bgcolor="#1368A9"><b><font face="arial" color="#000000">Dia de expedição:</font></b></td><td align="left" bgcolor="#1368A9"><font face="arial" color="#000000">' + w[date.getDay()] + ', ' + d[date.getDate()] + ' de ' + F[date.getMonth()] + ' de ' + date.getFullYear() + '</font></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td></tr>'
    dadosXls += '<tr><td height="18" align="left" bgcolor="#1368A9"><font face="arial" color="#000000">' + $('[name="profile"]').html() + '</font></td><td align="left" bgcolor="#1368A9"><b><font face="arial" color="#000000">Horário de expedição:</font></b></td><td align="left" bgcolor="#1368A9"><font face="arial" color="#000000">' + H[date.getHours()] + ':' + i[date.getMinutes()] + ':' + s[date.getSeconds()] + '</font></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td></tr>'
    dadosXls += '<tr><td height="20" align="left" bgcolor="#1368A9"><font face="arial" size="3" color="#000000"><br></font></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><font face="Liberation Serif"><br></font></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td><td align="left" bgcolor="#1368A9"><br></td></tr>'
    dadosXls += '<tr><td></td></tr>'
    for (let i = 0; i < week.length;) {
        var pas = i + 10

        dadosXls += '<tr><td height="17" align="left" bgcolor="#1368A9"><b><font face="arial" color="#000000">Dia</font></b></td>'
        for (let j = i; j < pas; j++) {
            if (week[j] != null) {
                dadosXls += '<td height="17" align="left" bgcolor="#000000"><b><font face="arial">' + wToBr[week[j].substring(0, week[j].indexOf(","))] + ', ' + FtoBr[week[j].substring(week[j].indexOf(",") + 2, week[j].indexOf(",") + 5)] + ' ' + week[j].substring(week[j].indexOf(",") + 6) + '</font></b></td>'
            }
        }
        dadosXls += '</tr>'

        dadosXls += '<tr><td height="17" align="left" bgcolor="#1368A9"><b><font face="arial" color="#000000">Horário</font></b></td>'
        for (let j = i; j < pas; j++) {
            if (hourt[j] != null) {
                dadosXls += '<td height="17" align="left" bgcolor="#000000"><b><font face="arial">' + hourt[j] + '</font></b></td>'
            }
        }
        dadosXls += '</tr>'

        dadosXls += '<tr><td height="17" align="left" bgcolor="#1368A9"><b><font face="arial" color="#000000">Watt: W</font></b></td>'
        for (let j = i; j < pas; j++) {
            if (watt[j] != null) {
                dadosXls += '<td height="17" align="left" bgcolor="#000000"><b><font face="arial">' + watt[j] + '</font></b></td>'
            }
        }
        dadosXls += '</tr>'
        dadosXls += '<tr><td></td></tr>'
        i = i + 10
    }

    dadosXls += "</tbody></table>";
    // dadosXls += '<tr><td></td></tr>'

    $("#dados_a_enviar").append(dadosXls);
    $("#tblExport").btechco_excelexport({
        containerid: "tblExport",
        datatype: $datatype.Table,
        filename: $('[name="condominio"]').val().toLowerCase().replace(" ", "_") + '_' + $('[name="ambiente"]').html().toLowerCase().replace(" ", "_")
    });
});

(function($) {

    $datatype = {
        Table: 1,
        Json: 2,
        Xml: 3,
        JqGrid: 4
    }

    var $defaults = {
        containerid: null,
        datatype: $datatype.Table,
        dataset: null,
        columns: null,
        filename: null
    };

    var $settings = $defaults;

    $.fn.btechco_excelexport = function(options) {
        $settings = $.extend({}, $defaults, options);

        switch ($settings.datatype) {
            case 1:
                Export($("#" + $settings.containerid).parent().html());
                break;
            case 2:
                Export(ConvertJsonToTable());
                break;
            case 3:
                Export(ConvertXmlToTable());
                break;
            case 4:
                Export(ConvertJqGridDataToTable());
                break;
        }

        function ConvertJsonToTable() {
            var result = "<table>";

            result += "<thead><tr>";
            $($settings.columns).each(function(key, value) {
                if (this.ishidden != true) {
                    result += "<th";
                    if (this.width != null) {
                        result += " style='width: " + this.width + "'";
                    }
                    result += ">";
                    result += this.headertext;
                    result += "</th>";
                }
            });
            result += "</tr></thead>";

            result += "<tbody>";
            $($settings.dataset).each(function(key, value) {
                result += "<tr>";
                $($settings.columns).each(function(k, v) {
                    if (value.hasOwnProperty(this.datafield)) {
                        if (this.ishidden != true) {
                            result += "<td";
                            if (this.width != null) {
                                result += " style='width: " + this.width + "'";
                            }
                            result += ">";
                            result += value[this.datafield];
                            result += "</td>";
                        }
                    }
                });
                result += "</tr>";
            });
            result += "</tbody>";

            result += "</table>";
            return result;
        }

        function ConvertXmlToTable() {
            var result = "<table>";

            result += "<thead><tr>";
            $($settings.columns).each(function(key, value) {
                if (this.ishidden != true) {
                    result += "<th";
                    if (this.width != null) {
                        result += " style='width: " + this.width + "'";
                    }
                    result += ">";
                    result += this.headertext;
                    result += "</th>";
                }
            });
            result += "</tr></thead>";

            result += "<tbody>";
            $($settings.dataset).find("row").each(function(key, value) {
                result += "<tr>";
                $($settings.columns).each(function(k, v) {
                    if ($(value).attr(this.datafield)) {
                        if (this.ishidden != true) {
                            result += "<td";
                            if (this.width != null) {
                                result += " style='width: " + this.width + "'";
                            }
                            result += ">";
                            result += $(value).attr(this.datafield);
                            result += "</td>";
                        }
                    }
                });
                result += "</tr>";
            });
            result += "</tbody>";

            result += "</table>";
            return result;
        }

        function ConvertJqGridDataToTable() {
            var result = "<table>";

            result += "<thead><tr>";
            $($settings.columns).each(function(key, value) {
                if (this.ishidden != true) {
                    result += "<th";
                    if (this.width != null) {
                        result += " style='width: " + this.width + "'";
                    }
                    result += ">";
                    result += this.headertext;
                    result += "</th>";
                }
            });
            result += "</tr></thead>";
            result += "<tbody>";

            $($settings.dataset).find("rows > row").each(function(key, value) {
                result += "<tr>";
                $($settings.columns).each(function(k, v) {
                    if ($(value).find(this.datafield)) {
                        if (this.ishidden != true) {
                            result += "<td";
                            if (this.width != null) {
                                result += " style='width: " + this.width + "'";
                            }
                            result += ">";
                            result += $(value).find(this.datafield).text();
                            result += "</td>";
                        }
                    }
                });
                result += "</tr>";
            });
            result += "</tbody>";

            result += "</table>";
            return result;
        }

        function Export(htmltable) {
            var excelFile = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:x='urn:schemas-microsoft-com:office:excel' xmlns='http://www.w3.org/TR/REC-html40'>";
            excelFile += "<head>";
            excelFile += "<!--[if gte mso 9]>";
            excelFile += "<xml>";
            excelFile += "<x:ExcelWorkbook>";
            excelFile += "<x:ExcelWorksheets>";
            excelFile += "<x:ExcelWorksheet>";
            excelFile += "<x:Name>";
            excelFile += "{worksheet}";
            excelFile += "</x:Name>";
            excelFile += "<x:WorksheetOptions>";
            excelFile += "<x:DisplayGridlines/>";
            excelFile += "</x:WorksheetOptions>";
            excelFile += "</x:ExcelWorksheet>";
            excelFile += "</x: ExcelWorksheets > ";
            excelFile += "</x: ExcelWorkbook > ";
            excelFile += "</xml>";
            excelFile += "<![endif]-->";
            excelFile += "</head>";
            excelFile += "<body>";
            excelFile += htmltable.replace(/"/g, '\'');
            excelFile += "</body>";
            excelFile += "</html>";
            var base64data = "base64," + $.base64.encode(excelFile);

            var filename = ($settings.filename == null) ? 'test' : $settings.filename;
            var uri = 'data:application/vnd.ms-excel;' + base64data;
            var downloadLink = document.createElement("a");
            downloadLink.href = uri;
            downloadLink.download = filename + ".xls";
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);

            //window.open('data:application/vnd.ms-excel;charset=utf-8;filename='+filename+';' + base64data);
        }
    };
})(jQuery);

jQuery.base64 = (function($) {

    var _PADCHAR = "=",
        _ALPHA = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",
        _VERSION = "1.0";


    function _getbyte64(s, i) {

        var idx = _ALPHA.indexOf(s.charAt(i));

        if (idx === -1) {
            throw "Cannot decode base64";
        }

        return idx;
    }


    function _decode(s) {
        var pads = 0,
            i,
            b10,
            imax = s.length,
            x = [];

        s = String(s);

        if (imax === 0) {
            return s;
        }

        if (imax % 4 !== 0) {
            throw "Cannot decode base64";
        }

        if (s.charAt(imax - 1) === _PADCHAR) {
            pads = 1;

            if (s.charAt(imax - 2) === _PADCHAR) {
                pads = 2;
            }

            imax -= 4;
        }

        for (i = 0; i < imax; i += 4) {
            b10 = (_getbyte64(s, i) << 18) | (_getbyte64(s, i + 1) << 12) | (_getbyte64(s, i + 2) << 6) | _getbyte64(s, i + 3);
            x.push(String.fromCharCode(b10 >> 16, (b10 >> 8) & 0xff, b10 & 0xff));
        }

        switch (pads) {
            case 1:
                b10 = (_getbyte64(s, i) << 18) | (_getbyte64(s, i + 1) << 12) | (_getbyte64(s, i + 2) << 6);
                x.push(String.fromCharCode(b10 >> 16, (b10 >> 8) & 0xff));
                break;

            case 2:
                b10 = (_getbyte64(s, i) << 18) | (_getbyte64(s, i + 1) << 12);
                x.push(String.fromCharCode(b10 >> 16));
                break;
        }

        return x.join("");
    }


    function _getbyte(s, i) {
        var x = s.charCodeAt(i);

        if (x > 255) {
            throw "INVALID_CHARACTER_ERR: DOM Exception 5";
        }

        return x;
    }


    function _encode(s) {
        if (arguments.length !== 1) {
            throw "SyntaxError: exactly one argument required";
        }

        s = String(s);

        var i,
            b10,
            x = [],
            imax = s.length - s.length % 3;

        if (s.length === 0) {
            return s;
        }

        for (i = 0; i < imax; i += 3) {
            b10 = (_getbyte(s, i) << 16) | (_getbyte(s, i + 1) << 8) | _getbyte(s, i + 2);
            x.push(_ALPHA.charAt(b10 >> 18));
            x.push(_ALPHA.charAt((b10 >> 12) & 0x3F));
            x.push(_ALPHA.charAt((b10 >> 6) & 0x3f));
            x.push(_ALPHA.charAt(b10 & 0x3f));
        }

        switch (s.length - imax) {
            case 1:
                b10 = _getbyte(s, i) << 16;
                x.push(_ALPHA.charAt(b10 >> 18) + _ALPHA.charAt((b10 >> 12) & 0x3F) + _PADCHAR + _PADCHAR);
                break;

            case 2:
                b10 = (_getbyte(s, i) << 16) | (_getbyte(s, i + 1) << 8);
                x.push(_ALPHA.charAt(b10 >> 18) + _ALPHA.charAt((b10 >> 12) & 0x3F) + _ALPHA.charAt((b10 >> 6) & 0x3f) + _PADCHAR);
                break;
        }

        return x.join("");
    }


    return {
        decode: _decode,
        encode: _encode,
        VERSION: _VERSION
    };

}(jQuery));