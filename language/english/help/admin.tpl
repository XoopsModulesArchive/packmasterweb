<div id="help-template" class="outer">
    <{include file=$smarty.const._MI_PMW_HELP_HEADER}>
    <h2 class="odd">Pack Master Web Administration Documentation</H2>
<P>This module was created by Rick Broker. The latest version of the
    module may be available at <A HREF="http://sourceforge.net/projects/packmasterweb">Source
        Forge</A></P>
<H2>Table of Contents</H2>
<TABLE BORDER=0 CELLPADDING=2 CELLSPACING=2>
    <TR>
        <TD>
            <P><A HREF="#about">About Pack Master Web</A></P>
        </TD>
    </TR>
    <TR>
        <TD>
            <P><A HREF="#require">Requirements</A></P>
        </TD>
    </TR>
    <TR>
        <TD>
            <P><A HREF="#upgrade">Updgrading from a Previous Version</A></P>
        </TD>
    </TR>
    <TR>
        <TD>
            <P><A HREF="#install">Installing Pack Master Web</A></P>
        </TD>
    </TR>
    <TR>
        <TD>
            <P><A HREF="#configure">Configuring</A></P>
        </TD>
    </TR>
    <TR>
        <TD>
            <P><A HREF="#blocks">Blocks in Pack Master Web</A></P>
        </TD>
    </TR>
</TABLE>
<H2>About Pack Master Web</H2>
<P>The Pack Master Web module works with Xoops version 2.07. I built
    this module because the Cub Scout Pack that my son is a member of
    uses Pack Master Software from <A HREF="http://www.troopmaster.com/index.html">Troopmaster
        Software, Inc</A>. Pack Master allows a Cub Scout Pack to track the
    advancement of the Cub Scouts and the adult leaders. It also creates
    some interesting reports. Pack Master is a Windows program an while
    there are add-ons to allow for sharing of the data files. I started
    making a web site for our pack. I used <A HREF="http://xoops.org/">Xoops</A>
    to setup the web site. As the pack leadership discussed what we
    wanted on the site, we decided that it would be nice if the boys and
    their parents could verify that we have recorded their progress
    towards their ranks. Pack Master Web was born. The initial plan was
    to allow us to upload CSV (Comma Separated Variable) files exported
    from Pack Master into the Pack Master Web module. Later development
    may include data entry so the whole process can be done on our web
    site.</P>
<H2><A NAME="require"></A>Requirements</H2>
<P>bob was developed using the following versions.</P>
<TABLE CELLPADDING=2 CELLSPACING=2>
    <TR>
        <TH>
            <P>Software</P>
        </TH>
        <TH>
            <P>Version</P>
        </TH>
    </TR>
    <TR>
        <TD>
            <P>Xoops</P>
        </TD>
        <TD>
            <P>2.0.7.3</P>
        </TD>
    </TR>
    <TR>
        <TD>
            <P>PHP</P>
        </TD>
        <TD>
            <P ALIGN=LEFT>4.3.10</P>
        </TD>
    </TR>
</TABLE>
<P>Your results will probably be best if you are using similar
    version numbers. Please report any version issues, so they can be
    corrected.
</P>
<H2><A NAME="upgrade"></A>Upgrading 0.1 from Previous Versions</H2>
<P>Hey this is the first release, so just install it.</P>
<H2><A NAME="install"></A>Installing Pack Master Web
</H2>
<P>Pack Master Web is installed just like any other xoops module.</P>
<UL>
    <LI><P STYLE="margin-bottom: 0in">Unzip the PackMasterWeb-X.XX.zip
        file into your modules directory.
    </P>
    <LI><P>Go to the xoops admin/system admin/modules page (hitting
        refresh if necessary), and click on the install icon for
        PackMasterWeb.
    </P>
</UL>
<P>You are now ready to configure PackMasterWeb.</P>
<H2><A NAME="configure"></A>Configuring Pack Master Web</H2>
<P>Pack Master Web has a number of settings that control the display
    and operation of the Pack Master Web.
</P>
<UL>
    <LI><P>Uploading Pack Master data to Pack Master Web</P>
        <UL>
            <LI><P>First Uploading the Scout Data</P>
                <UL>
                    <LI><P>In Pack Master Export the scout data.</P>
                </UL>
        </UL>
</UL>
<P><IMG SRC="<{$xoops_url}>/modules/<{$smarty.const._MI_PMW_DIRNAME}>/language/english/help/ScoutDataExport.png" NAME="ScoutDataExport" ALT="ScoutDataExport" ALIGN=BOTTOM WIDTH=51% HEIGHT=51% BORDER=0></P>
<UL>
    <UL>
        <UL>
            <LI><P>In the Pack Master Web Admin section goto the Upload area
                under upload scout data</P>
            <LI><P>Select the CSV file that you just exported from Pack Master</P>
            <LI><P>Click on the upload button</P>
        </UL>
        <LI><P>Next Upload the Advancement Data</P>
            <UL>
                <LI><P>In Pack Master export the Scout Advancement data</P>
            </UL>
    </UL>
</UL>
<P><IMG SRC="<{$xoops_url}>/modules/<{$smarty.const._MI_PMW_DIRNAME}>/language/english/help/ScoutRankDatesExport.png" NAME="ScoutRankDates" ALT="ScoutRankDates" ALIGN=LEFT WIDTH=469 HEIGHT=338 BORDER=0><BR CLEAR=LEFT><BR><BR>
</P>
<UL>
    <UL>
        <UL>
            <LI><P>In the Pack Master Web Admin section goto the Upload area
                under the upload advancement data</P>
            <LI><P>Select the CSV file that you just exported from Pack Master</P>
            <LI><P>Click on the upload button</P>
        </UL>
        <LI><P>Next Upload the Academic and Sports Advancement</P>
            <UL>
                <LI><P>In Pack Master export the Academic or Sports Advancements</P>
            </UL>
    </UL>
</UL>
<P><IMG SRC="<{$xoops_url}>/modules/<{$smarty.const._MI_PMW_DIRNAME}>/language/english/help/ScoutAcademicAwardsExport.png" NAME="Graphic1" ALIGN=LEFT WIDTH=435 HEIGHT=348 BORDER=0><BR CLEAR=LEFT><BR><BR>
</P>
<UL>
    <UL>
        <UL>
            <LI><P>In the Pack Master Web Admin section goto the Upload area
                under the upload Academic and Sports Advancements.</P>
            <LI><P>Select CSV file that you just exported from Pack Master</P>
            <LI><P>Click on the upload button<BR><BR><BR>
            </P>
        </UL>
    </UL>
</UL>
<H3>Other Configuration</H3>
<P>This section is general information about xoops and blocks, it is
    not specific to PackMasterWeb</P>
<H4>Block Visibility in Xoops</H4>
<P>To control block placement and visibility in xoops, go to
    /admin.php, and select &quot;System Admin&quot;, and then select
    blocks. Check the blocks you want to be visible, and their positions</P>
<P>One of the more common questions asked in xoops is &quot;Why can't
    people see my blocks?&quot;. The answer is you need to enable block
    visibility for anonymous users, if you want casual visitors to your
    site to see this module. This can be done under xoops
    administration/groups/anonymous users. Check next to every block you
    want visitors who have not signed in.
</P>
<P>You need to do this for module access, and block access, but NOT
    for administration.</P>
<H4>Block Titles</H4>
<P>The block titles are displayed at the top of the block. By
    default, xoops sets the block title to be the same as the block name.
    Go to System Administration/blocks and click on &quot;Edit&quot; next
    to the block whose title you want to change.
</P>
<H2><A NAME="blocks"></A>Blocks</H2>
<P>PackMasterWeb currently does not have any special blocks.</P>
<P><BR><BR>
</P>
</div>
