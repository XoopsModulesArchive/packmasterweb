<!-- template: PackMasterWeb_Bear.tpl -->
<SCRIPT LANGUAGE=JavaScript>
    function Handbook(page) {
        OpenWin = this.open("http://www.usscouts.org/advance/cubscout/" + page, "FormWindow", "toolbar=no,menubar=no, location=no,scrollbars=yes,resizable=yes");
    }
</SCRIPT>

<center>
    <table>
        <tr>
            <td><img src='images/bear-badge.jpg'</td>
            <td align='center' valign='center'><{$ScoutSelector}></td>
            <td><img src='images/bear-badge.jpg'</td>
        </tr>
    </table>
    <!--
    =============================================================================
        Build the advancement menu
    -->
    <table width='100%'>
        <tr>
            <td><a href='?op=scout&scoutid=<{$param_scoutid}>'>Scout Data</a></td>
            <td><a href='?op=tiger&scoutid=<{$param_scoutid}>'>Tiger</a></td>
            <td><a href='?op=bobcat&scoutid=<{$param_scoutid}>'>Bobcat</a></td>
            <td><a href='?op=wolf&scoutid=<{$param_scoutid}>'>Wolf</a></td>
            <th><h1>Bear</h1></th>
            <td><a href='?op=webelos&scoutid=<{$param_scoutid}>'>Webelos</a></td>
            <td><a href='?op=arrow&scoutid=<{$param_scoutid}>'>Arrow Of Light</a></td>
            <td><a href='?op=academicsport&scoutid=<{$param_scoutid}>'>Academic &amp; Sports</a></td>
        </tr>
        <tr>
            <th colspan='8'>
                <!--
                =========================================================================
                    Build a table of Bear Rank Requirements and completion dates
                -->
                <table>
                    <tr>
                        <th colspan='3'>Do one for GOD</th>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <th colspan='3'>Do four for GOD</th>
                    </tr>
                    <tr>
                        <td align='right'>1.</td>
                        <td align='left'>Ways We Worship</td>
                        <td><{$Bear_Acheivement_1}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>8.</td>
                        <td align='left'>The Past Is Exciting and Important</td>
                        <td><{$Bear_Acheivement_8}></td>
                    </tr>
                    <tr>
                        <td align='right'>2.</td>
                        <td align='left'>Emblems of Faith</td>
                        <td><{$Bear_Acheivement_2}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>9.</td>
                        <td align='left'>What's Cooking?</td>
                        <td><{$Bear_Acheivement_9}></td>
                    </tr>
                    <tr>
                        <th colspan='3'>&nbsp;</th>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>10.</td>
                        <td align='left'>Family Fun</td>
                        <td><{$Bear_Acheivement_10}></td>
                    </tr>
                    <tr>
                        <th colspan='3'>Do three for COUNTRY</th>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>11.</td>
                        <td align='left'>Be Ready</td>
                        <td><{$Bear_Acheivement_11}></td>
                    </tr>
                    <tr>
                        <td align='right'>3.</td>
                        <td align='left'>What Makes America Special?</td>
                        <td><{$Bear_Acheivement_3}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>12.</td>
                        <td align='left'>Family Outdoor Adventures</td>
                        <td><{$Bear_Acheivement_12}></td>
                    </tr>
                    <tr>
                        <td align='right'>4.</td>
                        <td align='left'>Tall Tailes</td>
                        <td><{$Bear_Acheivement_4}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>13.</td>
                        <td align='left'>Saving Well, Spending Well</td>
                        <td><{$Bear_Acheivement_13}></td>
                    </tr>
                    <tr>
                        <td align='right'>5.</td>
                        <td align='left'>Sharing Your World with Wildlife</td>
                        <td><{$Bear_Acheivement_5}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td colspan='3'>&nbsp;</td>
                    </tr>
                    <tr>
                        <td align='right'>6.</td>
                        <td align='left'>Take Care of Your Planet</td>
                        <td><{$Bear_Acheivement_6}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <th colspan='3'>Do four for SELF</th>
                    </tr>
                    <tr>
                        <td align='right'>7.</td>
                        <td align='left'>Law Enforcement Is a Big Job</td>
                        <td><{$Bear_Acheivement_7}></td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>14.</td>
                        <td align='left'>Ride Right</td>
                        <td><{$Bear_Acheivement_14}></td>
                    </tr>
                    <tr>
                        <td colspan='3'>&nbsp;</td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>15.</td>
                        <td align='left'>Games, Games, Games</td>
                        <td><{$Bear_Acheivement_15}></td>
                    </tr>
                    <tr>
                        <td colspan='3'>&nbsp;</td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>16.</td>
                        <td align='left'>Information, Please</td>
                        <td><{$Bear_Acheivement_16}></td>
                    </tr>
                    <tr>
                        <td colspan='3'>&nbsp;</td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>18.</td>
                        <td align='left'>Building Muscles</td>
                        <td><{$Bear_Acheivement_18}></td>
                    </tr>
                    <tr>
                        <td colspan='3'>&nbsp;</td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>19.</td>
                        <td align='left'>Shavings and Chips</td>
                        <td><{$Bear_Acheivement_19}></td>
                    </tr>
                    <tr>
                        <td colspan='3'>&nbsp;</td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>20.</td>
                        <td align='left'>Sawdust and Nails</td>
                        <td><{$Bear_Acheivement_20}></td>
                    </tr>
                    <tr>
                        <td colspan='3'>&nbsp;</td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>21.</td>
                        <td align='left'>Build a Model</td>
                        <td><{$Bear_Acheivement_21}></td>
                    </tr>
                    <tr>
                        <td colspan='3'>&nbsp;</td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>22.</td>
                        <td align='left'>Tying It All Up</td>
                        <td><{$Bear_Acheivement_22}></td>
                    </tr>
                    <tr>
                        <td colspan='3'>&nbsp;</td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>23.</td>
                        <td align='left'>Sports, Sports, Sports</td>
                        <td><{$Bear_Acheivement_23}></td>
                    </tr>
                    <tr>
                        <td colspan='3'>&nbsp;</td>

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        <td align='right'>24.</td>
                        <td align='left'>Be a Leader</td>
                        <td><{$Bear_Acheivement_24}></td>
                    </tr>
                    <tr>
                        <th colspan='2'>Bear Advancement Completed</th>
                        <td><{$Bear_Acheivement_25}></td>
                    </tr>
                </table>
            </th>
        </tr>
        <tr>
            <td colspan='8'><a href=javascript:Handbook('bear.asp')>Bear Handbook</a></td>
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
            <td colspan='8'><a href=javascript:Handbook('beararrow.html')>Bear Arrow Handbook</a></td>
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

