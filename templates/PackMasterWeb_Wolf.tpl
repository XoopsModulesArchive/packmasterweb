<!-- template: PackMasterWeb_Wolf.tpl -->
<SCRIPT LANGUAGE=JavaScript>
    function Handbook(page) {
        OpenWin = this.open("http://www.usscouts.org/advance/cubscout/" + page, "FormWindow", "toolbar=no,menubar=no, location=no,scrollbars=yes,resizable=yes");
    }
</SCRIPT>

<center>
    <table>
        <tr>
            <td><img src='images/wolf-badge.gif'</td>
            <td align='center' valign='center'><{$ScoutSelector}></td>
            <td><img src='images/wolf-badge.gif'</td>
        </tr>
    </table>
    <!-- Compute the number of columns the table will have -->
    <table width='100%'>
        <tr>
            <td><a href='?op=scout&scoutid=<{$param_scoutid}>'>Scout Data</a></td>
            <td><a href='?op=tiger&scoutid=<{$param_scoutid}>'>Tiger</a></td>
            <td><a href='?op=bobcat&scoutid=<{$param_scoutid}>'>Bobcat</a></td>
            <th><h1>Wolf</h1></th>
            <td><a href='?op=bear&scoutid=<{$param_scoutid}>'>Bear</a></td>
            <td><a href='?op=webelos&scoutid=<{$param_scoutid}>'>Webelos</a></td>
            <td><a href='?op=arrow&scoutid=<{$param_scoutid}>'>Arrow Of Light</a></td>
            <td><a href='?op=academicsport&scoutid=<{$param_scoutid}>'>Academic &amp; Sports</a></td>
        </tr>
        <tr>
            <th colspan='8'>
                <table>
                    <tr>
                        <td align='right'>1.</td>
                        <td align='left'>Feats of Skill</td>
                        <td><{$Wolf_Acheivement_1}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>7.</td>
                        <td align='left'>Your Living World</td>
                    </tr>
                    <tr>
                        <td align='right'>2.</td>
                        <td align='left'>Your Flag</td>
                        <td><{$Wolf_Acheivement_2}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>8.</td>
                        <td align='left'>Cooking and Eating</td>
                        <td><{$Wolf_Acheivement_8}></td>
                    </tr>
                    <tr>
                        <td align='right'>3.</td>
                        <td align='left'>Keep Your Body Healthy</td>
                        <td><{$Wolf_Acheivement_3}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>9.</td>
                        <td align='left'>Be Safe at Home and on the Street</td>
                        <td><{$Wolf_Acheivement_9}></td>
                    </tr>
                    <tr>
                        <td align='right'>4.</td>
                        <td align='left'>Know Your Home & Community</td>
                        <td><{$Wolf_Acheivement_4}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>10.</td>
                        <td align='left'>Family Fun</td>
                        <td><{$Wolf_Acheivement_10}></td>
                    </tr>
                    <tr>
                        <td align='right'>5.</td>
                        <td align='left'>Tools for fixing & Building</td>
                        <td><{$Wolf_Acheivement_5}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>11.</td>
                        <td align='left'>Duty to God</td>
                        <td><{$Wolf_Acheivement_11}></td>
                    </tr>
                    <tr>
                        <td align='right'>6.</td>
                        <td align='left'>Start a Collection</td>
                        <td><{$Wolf_Acheivement_6}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>12.</td>
                        <td align='left'>Making Choices</td>
                        <td><{$Wolf_Acheivement_12}></td>
                    </tr>
                    <td align='left' colspan='2'>Wolf Advancement Completed</td>
                    <td><{$Wolf_Acheivement_13}></td>
                    <tr>
                    </tr>
                </table>
            </th>
        </tr>
        <tr>
            <td colspan='8'><a href=javascript:Handbook('wolf.asp')>Wolf Handbook</a></td>
        </tr>
        <tr>
            <th colspan='8'><h2>Arrow Point Trail</h2></th>
        </tr>
        <tr>
            <!--
            =======================================================================
                Elective Requirements
            -->
            <th colspan='7'>
                <table>
                    <{foreach key=key item=item from=$arrows }>
                        <tr>
                            <td align='left'><{ $key }></td>
                            <td align='left'><{ $item.arrow }></td>
                            <td><{ $item.completed }></td>
                        </tr>
                    <{/foreach}>
                </table>
            </th>
            <!--
            =======================================================================
                Elective Arrow Points
            -->
            <th>
                <table>
                    <{foreach key=key item=item from=$Points }>
                        <tr>
                            <td><{ $item.img }></td>
                            <td><{ $item.date }></td>
                        </tr>
                    <{/foreach}>
                </table>
            </th>
        </tr>
        <tr>
            <td colspan='8'><a href=javascript:Handbook('wolf-elective.asp')>Wolf Electives Handbook</a></td>
        </tr>
    </table>
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

