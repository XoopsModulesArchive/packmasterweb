<!-- template: PackMasterWeb_ScoutData.tpl -->
<table>
    <tr>
        <td><img src='images/cubscouts.gif'</td>
        <td align='center' valign='center'><{$ScoutSelector}></td>
        <td><img src='images/cubscouts.gif'</td>
    </tr>
</table>
<center>
    <!-- Compute the number of columns the table will have -->
    <table width='100%'>
        <tr>
            <th><h1>Scout Data</h1></th>
            <td><a href='?op=tiger&scoutid=<{$param_scoutid}>'>Tiger</a></td>
            <td><a href='?op=bobcat&scoutid=<{$param_scoutid}>'>Bobcat</a></td>
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
                        <th align='left'>Scout Name:</th>
                        <td align='left'><{$FirstName}>&nbsp;<{$LastName}></td>
                    </tr>
                    <tr>
                        <th align='left'>Phone</th>
                        <td align='left'><{$HomePhone}></td>
                    </tr>
                    <tr>
                        <th align='left'>E-Mail</th>
                        <td align='left'><{$Email}><br><{$Parent1Email}><br><{$Parent2Email}></td>
                    </tr>
                    <tr>
                        <th align='left'>Den</th>
                        <td align='left'><{$Den}></td>
                    </tr>
                </table>
            </th>
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
