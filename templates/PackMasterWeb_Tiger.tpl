<!-- template: PackMasterWeb_ScoutData.tpl -->
<SCRIPT LANGUAGE=JavaScript>
    function Handbook(page) {
        OpenWin = this.open("http://www.usscouts.org/advance/cubscout/" + page, "FormWindow", "toolbar=no,menubar=no, location=no,scrollbars=yes,resizable=yes");
    }
</SCRIPT>

<center>
    <table>
        <tr>
            <td><img src='images/tiger-badge.jpg'</td>
            <td align='center' valign='center'><{$ScoutSelector}></td>
            <td><img src='images/tiger-badge.jpg'</td>
        </tr>
    </table>
    <!-- Compute the number of columns the table will have -->
    <table width='100%'>
        <tr>
            <td><a href='?op=scout&scoutid=<{$param_scoutid}>'>Scout Data</a></td>
            <th><h1>Tiger</h1></th>
            <td><a href='?op=bobcat&scoutid=<{$param_scoutid}>'>Bobcat</h1></td>
            <td><a href='?op=wolf&scoutid=<{$param_scoutid}>'>Wolf</a></td>
            <td><a href='?op=bear&scoutid=<{$param_scoutid}>'>Bear</a></td>
            <td><a href='?op=webelos&scoutid=<{$param_scoutid}>'>Webelos</a></td>
            <td><a href='?op=arrow&scoutid=<{$param_scoutid}>'>Arrow Of Light</a></td>
            <td><a href='?op=academicsport&scoutid=<{$param_scoutid}>'>Academic &amp; Sports</a></td>
        </tr>
        <tr>
            <th colspan='8'>
                <table>
                    <tr>
                        <th colspan='6'><h2>Tiger Totems</h2></th>
                    </tr>
                    <tr>
                        <td align='right'>1.</td>
                        <td align='left'>Tiger Cub Motto</td>
                        <td><{$Tiger_Totem_1}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>3.</td>
                        <td align='left'>Cub Scout Salute</td>
                        <td><{$Tiger_Totem_2}></td>
                    </tr>
                    <tr>
                        <td align='right'>2.</td>
                        <td align='left'>Cub Scout Sign</td>
                        <td><{$Tiger_Totem_2}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>4.</td>
                        <td align='left'>Totem Earned</td>
                        <td><{$Tiger_Totem_2}></td>
                    </tr>
                    <tr>
                        <th colspan='6'><h2>Tiger</h2></th>
                    </tr>
                    <tr>
                        <td align='right'>1F.</td>
                        <td align='left'>Chore with adult partner</td>
                        <td><{$Tiger_Achievement_1}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>4F.</td>
                        <td align='left'>Tell about your day</td>
                        <td><{$Tiger_Achievement_10}></td>
                    </tr>
                    <tr>
                        <td align='right'>1D.</td>
                        <td align='left'>Make a family scrapbook</td>
                        <td><{$Tiger_Achievement_2}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>4D.</td>
                        <td align='left'>Play 'Tell it like it isn't'</td>
                        <td><{$Tiger_Achievement_11}></td>
                    </tr>
                    <tr>
                        <td align='right'>1G.</td>
                        <td align='left'>Visit library, museum, or person</td>
                        <td><{$Tiger_Achievement_3}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>4G.</td>
                        <td align='left'>Visit TV, radio, or newspaper</td>
                        <td><{$Tiger_Achievement_12}></td>
                    </tr>
                    <tr>
                        <td align='right'>2F.</td>
                        <td align='left'>Look at map of your community</td>
                        <td><{$Tiger_Achievement_4}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>5F.</td>
                        <td align='left'>Watch the weather</td>
                        <td><{$Tiger_Achievement_13}></td>
                    </tr>
                    <tr>
                        <td align='right'>2G.</td>
                        <td align='left'>Visit police or fire station</td>
                        <td><{$Tiger_Achievement_5}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>5D.</td>
                        <td align='left'>Make a leaf rubbing</td>
                        <td><{$Tiger_Achievement_14}></td>
                    </tr>
                    <tr>
                        <td align='right'>3Fa.</td>
                        <td align='left'>Plan and practice a fire drill</td>
                        <td><{$Tiger_Achievement_6}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>5G.</td>
                        <td align='left'>Take a hike with your den</td>
                        <td><{$Tiger_Achievement_15}></td>
                    </tr>
                    <tr>
                        <td align='right'>3Fb.</td>
                        <td align='left'>Plan for getting lost or separated</td>
                        <td><{$Tiger_Achievement_7}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>6.</td>
                        <td align='left'>Badge Earned</td>
                        <td><{$Tiger_Achievement_17}></td>
                    </tr>
                    <tr>
                        <td align='right'>3D.</td>
                        <td align='left'>Make a food guide pyramid</td>
                        <td><{$Tiger_Achievement_8}></td>

                    </tr>
                    <tr>
                        <td align='right'>3G.</td>
                        <td align='left'>Learn rules/watch a sport</td>
                        <td><{$Tiger_Achievement_9}></td>

                    </tr>
                </table>
            </th>
        </tr>
        <tr>
            <td colspan='8'><a href=javascript:Handbook('tiger.asp')>Tiger Handbook</a></td>
        </tr>
        <tr>
            <th colspan='8'><h2>Tiger Electives</h2></th>
        </tr>
        <!--
        <tr>
            ======================================================================
                                    Electives Table
            ======================================================================
        </tr>
        -->
        <tr>
            <td colspan='8'><a href=javascript:Handbook('tiger-elective.asp')>Tiger Handbook</a></td>
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
