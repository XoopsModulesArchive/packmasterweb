<!-- template: PackMasterWeb_ArrowOfLight.tpl -->
<SCRIPT LANGUAGE=JavaScript>
    function Handbook(page) {
        OpenWin = this.open("http://www.usscouts.org/advance/cubscout/" + page, "FormWindow", "toolbar=no,menubar=no, location=no,scrollbars=yes,resizable=yes");
    }
</SCRIPT>

<center>
    <table>
        <tr>
            <td><img src='images/arrowoflight.gif'</td>
            <td align='center' valign='center'><{$ScoutSelector}></td>
            <td><img src='images/arrowoflight.gif'</td>
        </tr>
    </table>
    <!-- Compute the number of columns the table will have -->
    <table width='100%'>
        <tr>
            <td><a href='?op=scout&scoutid=<{$param_scoutid}>'>Scout Data</a></td>
            <td><a href='?op=tiger&scoutid=<{$param_scoutid}>'>Tiger</a></td>
            <td><a href='?op=bobcat&scoutid=<{$param_scoutid}>'>Bobcat</a></td>
            <td><a href='?op=wolf&scoutid=<{$param_scoutid}>'>Wolf</a></td>
            <td><a href='?op=bear&scoutid=<{$param_scoutid}>'>Bear</a></td>
            <td><a href='?op=webelos&scoutid=<{$param_scoutid}>'>Webelos</a></td>
            <th><h1>Arrow Of Light</h1></th>
            <td><a href='?op=academicsport&scoutid=<{$param_scoutid}>'>Academic &amp; Sports</a></td>
        </tr>
        <tr>
            <th colspan='8'>
                <table>
                    <tr>
                        <td align='right'>1.</td>
                        <td align='left'>Be active for 6 months</td>
                        <td><{$ArrowOfLight_1}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>7.</td>
                        <td align='left'>Visit troop meeting</td>
                        <td><{$ArrowOfLight_7}></td>
                    </tr>
                    <tr>
                        <td align='right'>2.</td>
                        <td align='left'>Scout Oath/Law</td>
                        <td><{$ArrowOfLight_2}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>8.</td>
                        <td align='left'>Troop outdoor activity</td>
                        <td><{$ArrowOfLight_8}></td>
                    </tr>
                    <tr>
                        <td align='right'>3.</td>
                        <td align='left'>Motto/Slogan</td>
                        <td><{$ArrowOfLight_3}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>9.</td>
                        <td align='left'>Webelos camp/hike</td>
                        <td><{$ArrowOfLight_9}></td>
                    </tr>
                    <tr>
                        <td align='right'>4.</td>
                        <td align='left'>Scout Badge</td>
                        <td><{$ArrowOfLight_4}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>10.</td>
                        <td align='left'>Troop meeting/application</td>
                        <td><{$ArrowOfLight_10}></td>
                    </tr>
                    <tr>
                        <td align='right'>5.</td>
                        <td align='left'>Boy Scout uniform</td>
                        <td><{$ArrowOfLight_5}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>11.</td>
                        <td align='left'>Honesty/Character Connection</td>
                        <td><{$ArrowOfLight_11}></td>
                    </tr>
                    <tr>
                        <td align='right'>6.</td>
                        <td align='left'>Tie square knot</td>
                        <td><{$ArrowOfLight_6}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>12.</td>
                        <td align='left'>Badge Earned</td>
                        <td><{$ArrowOfLight_12}></td>
                    </tr>
                </table>
            </th>
        </tr>
        <tr>
            <td colspan='8'><a href=javascript:Handbook('aol.asp')>Arrow Of Light Handbook</a></td>
        </tr>
        <tr>
            <th colspan='8'><h2>Activity Badges</h2></th>
        </tr>
        <tr>
            <td colspan='8'><a href=javascript:Handbook('webelos-aol-elective.asp')>Activity Badge Handbook</a></td>
        </tr>
    </table>
</center>
<table>
    <tr>
        <td width="40%">
            <hr>
        </td>
        <td><FONT size=1>
                <a href="http://packmasterweb.sourceforge.net/">PackMasterWeb</a>&nbsp;Developed&nbsp;By&nbsp;<A href="mailto:rick_broker@yahoo.com">Rick&nbsp;Broker</A></FONT>
        </td>
        <td width="40%">
            <hr>
        </td>
    </tr>
</table>
