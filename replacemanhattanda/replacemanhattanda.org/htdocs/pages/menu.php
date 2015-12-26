<?	
	$menu[0]["id"] = "menu-436-1";
	$menu[0]["classes"] = "first odd sf-item-1 class menuparent";
	$menu[0]["href"] = "/office";
	$menu[0]["title"] = "The Office";
	$menu[0]["script"] = "The Office";
	
	$menu[0][0]["id"] = "menu-456-1";
	$menu[0][0]["classes"] = "first odd sf-item-1";
	$menu[0][0]["href"] = "/pages/yourname";
	$menu[0][0]["title"] = "A new lawyer";
	$menu[0][0]["script"] = "Your Name";

	$menu[0][1]["id"] = "menu-1465-1";
	$menu[0][1]["classes"] = "even sf-item-2";
	$menu[0][1]["href"] = "/meet-executive-team";
	$menu[0][1]["title"] = "Meet the Executive Team";
	$menu[0][1]["script"] = "Meet the Executive Team";
	
	$menu[0][2]["id"] = "menu-458-1";
	$menu[0][2]["classes"] = "odd sf-item-3";
	$menu[0][2]["href"] = "/history-office";
	$menu[0][2]["title"] = "History of the Office";
	$menu[0][2]["script"] = "History of the Office";
	
	$menu[0][3]["id"] = "menu-1573-1";
	$menu[0][3]["classes"] = "even sf-item-4";
	$menu[0][3]["href"] = "/notable-cases-0";
	$menu[0][3]["title"] = "Notable Cases";
	$menu[0][3]["script"] = "Notable Cases";
	
	$menu[0][4]["id"] = "menu-1673-1";
	$menu[0][4]["classes"] = "odd sf-item-5 class menuparent";
	$menu[0][4]["href"] = "/bureaus-units";
	$menu[0][4]["title"] = "Bureaus";
	$menu[0][4]["script"] = "Bureaus &amp; Units";

	$menu[0][4][0]["id"] = "menu-1674-1";
	$menu[0][4][0]["classes"] = "odd sf-item-5 class menuparent";
	$menu[0][4][0]["href"] = "/trial-division";
	$menu[0][4][0]["title"] = "Trial Division";
	$menu[0][4][0]["script"] = "Trial Division";

	$menu[0][4][1]["id"] = "menu-1675-1";
	$menu[0][4][1]["classes"] = "first odd sf-item-1";
	$menu[0][4][1]["href"] = "/investigation-division";
	$menu[0][4][1]["title"] = "Investigation Division";
	$menu[0][4][1]["script"] = "Investigation Division";

	$menu[0][4][2]["id"] = "menu-1676-1";
	$menu[0][4][2]["classes"] = "even sf-item-2";
	$menu[0][4][2]["href"] = "/appeals";
	$menu[0][4][2]["title"] = "Appeals";
	$menu[0][4][2]["script"] = "Appeals";

	$menu[0][5]["id"] = "menu-464-1";
	$menu[0][5]["classes"] = "odd sf-item-3";
	$menu[0][5]["href"] = "/special-narcotics";
	$menu[0][5]["title"] = "Special Narcotics";
	$menu[0][5]["script"] = "Special Narcotics";
	
	print "<PRE>";
	if ( ! empty ($menu)) {
		foreach ($menu as $var) {
			if ( ! is_array($var)) {
				print "VAR: $var\n";
			}
			
			foreach ($var as $vor) {
				if ( ! is_array($vor)) {
					print "VoR: $vor\n";
				}
				
				foreach ($vor as $vir) {
					print "VAR: " . $var . " - " . $vor . " - " . $vir . "\n";
				}
			}
		}
	}	
	print "</PRE>";
	
	
?>


<!-- MAIN MENU : BEGINS -->
<div id="menu-main"> 
	<div id="block-superfish-1" class="clear-block block block-superfish ">
		<div class="block-inside">
			<div class="content">
				<ul class="sf-menu sf-navbar sf-style-coffee" id="superfish-1">
					<?
						if ( ! empty ($menu)) {
							foreach ($menu as $var) {
								
								if (  ! empty ($vor) && ! is_array($var["id"])) {
									echo 	"<li id=\"" . $var["id"] . "\" class=\"" . $var["classes"] . "\">" . 
												"<a href=\"" . $var["href"] ."\" " . 
												"title=\"" . $var["title"] . "\">" . $var["script"] . "</a>\n";
									}								
								
									foreach ($var as $vor) {
										if (  ! empty ($vor) && ! is_array($vor["id"])) {
										echo 	"<li id=\"" . $vor["id"] . "\" class=\"" . $vor["classes"] . "\">" . 
													"<a href=\"" . $vor["href"] ."\" " . 
													"title=\"" . $vor["title"] . "\">" . $vor["script"] . "</a>\n";
										}
																	
										foreach ($vor as $vir) {
											if ( ! empty ($vir) && ! is_array($vir["id"])) {
											echo 	"<li id=\"" . $vir["id"] . "\" class=\"" . $vir["classes"] . "\">" . 
														"<a href=\"" . $vir["href"] ."\" " . 
														"title=\"" . $vir["title"] . "\">" . $vir["script"] . "</a>";
											echo "</li>\n";
											}
										}
										
										echo "</li>\n";
									}
								echo "</li>\n";
								}
							}
						
					?>
					
					
						<ul>
							<? for ($i = 0; $i < 5; $i++) { ?>
								<li id="<?= $menu[0][$i]["id"] ?>" class="<?= $menu[0][$i]["classes"] ?>">
									<a href="<?= $menu[0][$i]["href"] ?>" title="<?= $menu[0][$i]["title"] ?>"><?= $menu[0][$i]["script"] ?></a>
								<? if ( $i < 5) { echo "</li>"; } ?>
							<? } ?>
								<ul>
								<? $i = 4 ?>
								<li id="<?= $menu[0][$i][0]["id"] ?>" class="<?= $menu[0][$i][0]["classes"] ?>">
									<a href="<?= $menu[0][$i][0]["href"] ?>" title="<?= $menu[0][$i][0]["title"] ?>"><?= $menu[0][$i]["script"] ?></a>
								</li>
									<li id="menu-1674-1" class=""><a href="" title=""></a></li>
									<li id="menu-1675-1" class=""><a href="" title=""></a></li>
									<li id="menu-1676-1" class=""><a href="" title=""></a></li>
								</ul>
							</li>
							<li id="menu-464-1" class=""><a href="/special-narcotics" title=""></a></li>
						</ul>
					
					</li>
						<li id="menu-437-1" class="even sf-item-2 class menuparent"><a href="/priorities-partnerships" title="Priorities &amp; Partnerships">Priorities &amp; Partnerships</a>
						<ul>
							<li id="menu-1409-1" class="first odd sf-item-1 class menuparent"><a href="/leadership-initiatives" title="Leadership Initiatives">Leadership Initiatives</a>
								<ul>
									<li id="menu-1410-1" class="first odd sf-item-1"><a href="/forensic-sciences-cold-case-unit" title="Forensic Sciences/DNA Unit">Forensic Sciences/DNA Unit</a></li>
									<li id="menu-1411-1" class="even sf-item-2"><a href="/criminal-court-reform" title="Criminal Court Reform">Criminal Court Reform</a></li>
									<li id="menu-1414-1" class="odd sf-item-3"><a href="/preventing-wrongful-convictions" title="Conviction Integrity">Conviction Integrity</a></li>
									<li id="menu-1413-1" class="even sf-item-4"><a href="/intelligence-driven-prosecution-crime-strategies-unit" title="Intelligence-Based Prosecution">Intelligence-Based Prosecution</a></li>
								</ul>
							</li>
							<li id="menu-1415-1" class="even sf-item-2"><a href="/legislative-priorities" title="Legislative Priorities">Legislative Priorities</a></li>
							<li id="menu-518-1" class="odd sf-item-3 class menuparent"><a href="/partnerships" title="Partnerships">Partnerships</a>
							<ul>
								<li id="menu-7843-1" class="first odd sf-item-1"><a href="/combating-human-trafficking" title="Combatting Human Trafficking">Combatting Human Trafficking</a></li>
								<li id="menu-1412-1" class="even sf-item-2"><a href="/fall-2013-conference-intellectual-property-rights-enforcement-digital-age-0" title="Fall 2013 Conference on Intellectual Property Rights Enforcement in the Digital Age">Fall 2013 Conference on Intellectual Property Rights Enforcement in the Digital Age</a></li>
								<li id="menu-7986-1" class="odd sf-item-3"><a href="/procedure-request-letter-support" title="Procedure to Request Letter of Support">Procedure to Request Letter of Support</a></li>
								<li id="menu-7857-1" class="even sf-item-4"><a href="/restorative-justice-program-museum-tolerance-new-york" title="Restorative Justice Program at the Museum of Tolerance New York">Restorative Justice Program at the Museum of Tolerance New York</a></li>
								<li id="menu-1408-1" class="odd sf-item-5"><a href="/communities-justice-summit" title="Communities &amp; Justice Summit">Communities &amp; Justice Summit</a></li>
							</ul>
						</li>
						<li id="menu-2813-1" class="even sf-item-4"><a href="http://manhattanda.org/sites/default/files/Annual%20Report%20for%202014%20-%20File.pdf" title="2014 Annual Report">2014 Annual Report</a></li>
						<li id="menu-7991-1" class="odd sf-item-5"><a href="/ending-national-rape-kit-backlog" title="Ending the Rape Kit Backlog Nationwide">Ending the Rape Kit Backlog Nationwide</a></li>
						<li id="menu-8186-1" class="even sf-item-6"><a href="/smartphone-encryption" title="Ensuring Lawful Access to Smartphones">Ensuring Lawful Access to Smartphones</a></li>
						</ul>
						</li>
						<li id="menu-438-1" class="odd sf-item-3 class menuparent"><a href="/community-initiatives" title="Community Initiatives">Community Initiatives</a>
						<ul>
						<li id="menu-520-1" class="first odd sf-item-1"><a href="/community-partnerships-unit" title="Community Partnerships Unit">Community Partnerships Unit</a></li>
						<li id="menu-523-1" class="even sf-item-2"><a href="/community-event" title="Community Photo Gallery">Community Photo Gallery</a></li>
						<li id="menu-2895-1" class="odd sf-item-3"><a href="/community-offices" title="Community Offices">Community Offices</a></li>
						<li id="menu-554-1" class="even sf-item-4"><a href="/nypd-precincts" title="NYPD Precincts">NYPD Precincts</a></li>
						<li id="menu-555-1" class="odd sf-item-5 class menuparent"><a href="/resources-landlords-tenants" title="Resources for Landlords &amp; Tenants">Resources for Landlords &amp; Tenants</a>
						<ul>
						<li id="menu-1462-1" class="first odd sf-item-1"><a href="/narcotics-eviction-program" title="Narcotics Eviction Program">Narcotics Eviction Program</a></li>
						<li id="menu-1461-1" class="even sf-item-2"><a href="/trespass-affidavit-program" title="Trespass Affidavit Program">Trespass Affidavit Program</a></li>
						</ul>
						</li>
						<li id="menu-7821-1" class="even sf-item-6"><a href="http://manhattanda.org/saturday-night-lights" title="Saturday Night Lights">Saturday Night Lights</a></li>
						</ul>
						</li>
						<li id="menu-2439-1" class="even sf-item-4 class menuparent"><a href="/learning-resource-center" title="Learning &amp; Resource Center">Learning &amp; Resource Center</a>
						<ul>
						<li id="menu-572-1" class="first odd sf-item-1 class menuparent"><a href="/educational-initiatives" title="Educational Initiatives">Educational Initiatives</a>
						<ul>
						<li id="menu-1416-1" class="first odd sf-item-1"><a href="/legal-bound" title="Legal Bound">Legal Bound</a></li>
						<li id="menu-1417-1" class="even sf-item-2"><a href="/adult-education" title="Adult Education">Adult Education</a></li>
						<li id="menu-2486-1" class="odd sf-item-3"><a href="/glossary-legal-terms" title="Glossary of Legal Terms">Glossary of Legal Terms</a></li>
						</ul>
						</li>
						<li id="menu-4932-1" class="even sf-item-2"><a href="/criminal-justice-system-how-it-works" title="Criminal Justice System">Criminal Justice System</a></li>
						<li id="menu-600-1" class="odd sf-item-3 class menuparent"><a href="/resources" title="Resources">Resources</a>
						<ul>
						<li id="menu-2121-1" class="first odd sf-item-1"><a href="/related-agencies-contact-info" title="Related Agencies &amp; Contact Info">Related Agencies &amp; Contact Info</a></li>
						<li id="menu-2797-1" class="even sf-item-2"><a href="/resources-schools-community-groups" title="Resources for Schools &amp; Community Groups">Resources for Schools &amp; Community Groups</a></li>
						</ul>
						</li>
						</ul>
						</li>
						<li id="menu-440-1" class="odd sf-item-5 class menuparent"><a href="/victim-family-resources" title="Victim &amp; Family Resources">Victim &amp; Family Resources</a>
						<ul>
						<li id="menu-602-1" class="first odd sf-item-1 class menuparent"><a href="/witness-aid-services-unit-wasu" title="Victim Services">Victim Services</a>
						<ul>
						<li id="menu-1423-1" class="first odd sf-item-1"><a href="/witness-aid-services-unit" title="Witness Aid Services">Witness Aid Services</a></li>
						<li id="menu-1424-1" class="even sf-item-2 class menuparent"><a href="/victims-rights-guidelines" title="Victims&#039; Rights &amp; Guidelines">Victims&#039; Rights &amp; Guidelines</a>
						<ul>
						<li id="menu-3988-1" class="first odd sf-item-1"><a href="/order-protection" title="Order of Protection">Order of Protection</a></li>
						</ul>
						</li>
						</ul>
						</li>
						<li id="menu-611-1" class="even sf-item-2 class menuparent"><a href="/search-resources" title="Resources by Crime">Resources by Crime</a>
						<ul>
						<li id="menu-2876-1" class="first odd sf-item-1"><a href="/sexual-assault-and-criminal-justice-system" title="Sex Crimes">Sex Crimes</a></li>
						<li id="menu-2882-1" class="even sf-item-2"><a href="/resources-victims-elder-abuse" title="Elder Abuse">Elder Abuse</a></li>
						<li id="menu-2886-1" class="odd sf-item-3"><a href="/resources-victims-domestic-violence" title="Domestic Violence">Domestic Violence</a></li>
						<li id="menu-2887-1" class="even sf-item-4"><a href="/resources-victims-child-abuse" title="Child Abuse">Child Abuse</a></li>
						<li id="menu-2888-1" class="odd sf-item-5"><a href="/resources-victims-or-witnesses-hate-crimes" title="Hate Crimes">Hate Crimes</a></li>
						<li id="menu-2889-1" class="even sf-item-6"><a href="/resources-victims-identity-theftcybercrime" title="CyberCrime/ID Theft">CyberCrime/ID Theft</a></li>
						<li id="menu-2890-1" class="odd sf-item-7"><a href="http://www.manhattanda.com/resources-victims-immigration-fraud" title="Immigration Fraud">Immigration Fraud</a></li>
						<li id="menu-2891-1" class="even sf-item-8"><a href="/resources-families-murder-victims" title="Families of Murder Victims">Families of Murder Victims</a></li>
						<li id="menu-2892-1" class="odd sf-item-9"><a href="/resources-general-crime-victims" title="General Crime Victims">General Crime Victims</a></li>
						<li id="menu-2893-1" class="even sf-item-10"><a href="/resources-victims-financial-crime" title="Financial Crime">Financial Crime</a></li>
						<li id="menu-2894-1" class="odd sf-item-11"><a href="/resources-victims-public-corruption" title="Public Corruption">Public Corruption</a></li>
						<li id="menu-6407-1" class="even sf-item-12"><a href="/human-trafficking-0" title="Human Trafficking">Human Trafficking</a></li>
						</ul>
						</li>
						</ul>
						</li>
						<li id="menu-441-1" class="even sf-item-6 class menuparent"><a href="/media-center" title="Media Center">Media Center</a>
						<ul>
						<li id="menu-3934-1" class="first odd sf-item-1"><a href="/press-office-faqs" title="FAQs">FAQs</a></li>
						<li id="menu-3135-1" class="even sf-item-2"><a href="/video-gallery" title="Video Gallery">Video Gallery</a></li>
						<li id="menu-4205-1" class="odd sf-item-3"><a href="/testimony" title="Testimony">Testimony</a></li>
						<li id="menu-3747-1" class="even sf-item-4"><a href="/speeches" title="Speeches">Speeches</a></li>
						<li id="menu-1923-1" class="odd sf-item-5"><a href="/news" title="In the News">In the News</a></li>
						<li id="menu-619-1" class="even sf-item-6"><a href="/press-release" title="Press Releases">Press Releases</a></li>
						<li id="menu-7987-1" class="odd sf-item-7"><a href="/Live" title="Live Video">Live Video</a></li>
						</ul>
						</li>
						<li id="menu-442-1" class="odd sf-item-7 class menuparent"><a href="/careers-training" title="Careers &amp; Training">Careers &amp; Training</a>
						<ul>
						<li id="menu-626-1" class="first odd sf-item-1 class menuparent"><a href="/career-opportunities" title="Career Opportunities">Career Opportunities</a>
						<ul>
						<li id="menu-1440-1" class="first odd sf-item-1 class menuparent"><a href="/legal-staff-employment" title="Legal Staff">Legal Staff</a>
						<ul>
						<li id="menu-1448-1" class="first odd sf-item-1"><a href="/application-process" title="Application Process">Application Process</a></li>
						<li id="menu-6150-1" class="even sf-item-2"><a href="/interview-materials-1" title="Interview Materials">Interview Materials</a></li>
						<li id="menu-1450-1" class="odd sf-item-3"><a href="/salary-and-benefits" title="Salary and Benefits">Salary and Benefits</a></li>
						<li id="menu-6405-1" class="even sf-item-4"><a href="/recruitment-events-0" title="Recruitment Events">Recruitment Events</a></li>
						<li id="menu-1451-1" class="odd sf-item-5"><a href="/faqs" title="FAQs">FAQs</a></li>
						</ul>
						</li>
						<li id="menu-1441-1" class="even sf-item-2 class menuparent"><a href="/support-staff-employment" title="Support Staff">Support Staff</a>
						<ul>
						<li id="menu-1452-1" class="first odd sf-item-1"><a href="/application-process-1" title="Application Process">Application Process</a></li>
						<li id="menu-1453-1" class="even sf-item-2"><a href="http://dany.applicantstack.com/x/openings" title="Job Openings">Job Openings</a></li>
						</ul>
						</li>
						</ul>
						</li>
						<li id="menu-6131-1" class="even sf-item-2 class menuparent"><a href="/1367" title="Internship Opportunities">Internship Opportunities</a>
						<ul>
						<li id="menu-1442-1" class="first odd sf-item-1 class menuparent"><a href="/law-school-summer-internship" title="Law School Summer Internship">Law School Summer Internship</a>
						<ul>
						<li id="menu-1454-1" class="first odd sf-item-1"><a href="/application-process-2" title="Application Process">Application Process</a></li>
						<li id="menu-6147-1" class="even sf-item-2"><a href="/interview-materials" title="Interview Materials">Interview Materials</a></li>
						<li id="menu-1455-1" class="odd sf-item-3"><a href="/programming" title="Programming">Programming</a></li>
						<li id="menu-1456-1" class="even sf-item-4"><a href="/faqs-0" title="FAQs">FAQs</a></li>
						</ul>
						</li>
						<li id="menu-1443-1" class="even sf-item-2 class menuparent"><a href="/law-school-semester-internship" title="Law School Semester Internship">Law School Semester Internship</a>
						<ul>
						<li id="menu-1457-1" class="first odd sf-item-1"><a href="/application-process-0" title="Application Process">Application Process</a></li>
						<li id="menu-6148-1" class="even sf-item-2"><a href="/interview-materials-0" title="Interview Materials">Interview Materials</a></li>
						</ul>
						</li>
						<li id="menu-1444-1" class="odd sf-item-3 class menuparent"><a href="/college-internship" title="College Internship">College Internship</a>
						<ul>
						<li id="menu-1460-1" class="first odd sf-item-1"><a href="/application-process-4" title="Application Process">Application Process</a></li>
						<li id="menu-1677-1" class="even sf-item-2"><a href="/faqs-2" title="FAQs">FAQs</a></li>
						</ul>
						</li>
						<li id="menu-1445-1" class="even sf-item-4"><a href="/high-school-internship" title="High School Internship Program">High School Internship Program</a></li>
						<li id="menu-6149-1" class="odd sf-item-5"><a href="/press-office-internship" title="Press Office Internship">Press Office Internship</a></li>
						<li id="menu-6274-1" class="even sf-item-6"><a href="/spanish-language-unit-internships" title="Spanish Language Unit Internship">Spanish Language Unit Internship</a></li>
						</ul>
						</li>
						<li id="menu-628-1" class="odd sf-item-3"><a href="/diversity-initiative" title="Diversity Initiative">Diversity Initiative</a></li>
						<li id="menu-629-1" class="even sf-item-4"><a href="/legal-training" title="Legal Training">Legal Training</a></li>
						<li id="menu-630-1" class="odd sf-item-5"><a href="/support-staff-training" title="Support Staff Training">Support Staff Training</a></li>
						<li id="menu-6404-1" class="even sf-item-6"><a href="/recruitment-events-0" title="Recruitment Events">Recruitment Events</a></li>
						</ul>
						</li>
						</ul>
						
				
						
						</div>
						  </div>
						</div>
						 </div>
						        
