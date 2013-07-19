<script>
	function change()
	{
	    var elem = document.getElementById("company_expand");
	    if (elem.value=="-") elem.value = "+";
	    else elem.value = "-";
	}
	function change2()
	{
	    var elem = document.getElementById("testimonial_expand");
	    if (elem.value=="-") elem.value = "+";
	    else elem.value = "-";
	}
</script>
<div class="container main-content">
	<div class="row">
		<div class="span2"><img src="<?php echo base_url() . 'img/logo.png' ?>" alt="logo" class="logo"></div>
		<div class="span9 article well">
			<div class="page-header">
				<h1>Our Clients</h1>
			</div>

			<p>We are extremely proud of our client list which we have served literally hundreds of satisfied clients.  Top 100 Multinational Corporations, State Governments and Universities have utilized our training as their organizational improvement and continuous learning channel.</p>

			<br />
			<div class="accordion" id="companies_accordion">
				<div class="accordion-group">
					<h2 class="expand" id="company_list">Companies &nbsp;
						<a class="expand" class="accordion-toggle" data-toggle="collapse" data-parent="#companies_accordion" href="#collapseOne">
							 <input type="button" class="btn btn-primary btn-expand" id="company_expand" onclick="change()" value="-" />
						</a>
					</h2>
					<div id="collapseOne" class="accordion-body collapse in">
						<div class="accordion-inner text-box">
							<ol>
								<li>ACADEMY RAPID PENANG</li>
								<li>ACHI JAYA TRANSPORTATION SDN BHD</li>
								<li>ADVANCED CERAMICS TECHNOLOGY (M) SDN BHD</li>
								<li>ADVANCED MICRO SERVICES EXPORT SDN BHD</li>
								<li>AFFIN BANK BERHAD</li>
								<li>AGRO BANK BERHAD</li>
								<li>AGROBANK DEVELOPMENT INSTITUTE</li>
								<li>AIRASIA BERHAD</li>
								<li>AL RAJHI BANK</li>
								<li>ALAM MARITIM (M) SDN BHD</li>
								<li>AMANAH RAYA BERHAD</li>
								<li>AMANAH RAYA REIT MANAGERS</li>
								<li>BAIDURI BANK</li>
								<li>BANDAR RAYA DEVELOPMENT BERHAD</li>
								<li>BANK ISLAM MALAYSIA BERHAD</li>
								<li>BARD SDN BHD</li>
								<li>BASF (M) SDN BHD</li>
								<li>BINTULU PORT HOLDINGS BERHAD</li>
								<li>BURSA MALAYSIA</li>
								<li>CABOT (MALAYSIA) SDN BHD</li>
								<li>CAMPBELL CHEONG CHAN SDN BHD</li>
								<li>CAMPBELL SOUP SOUTHEAST ASIA SDN BHD</li>
								<li>CARLSBERG BREWERY MALAYSIA BERHAD</li>
								<li>CARRIER INTERNATIONAL SDN BHD</li>
								<li>CELCOM AXIATA BERHAD</li>
								<li>CEMENT INDUSTRIES OF MALAYSIA</li>
								<li>CHEK HUP SDN BHD</li>
								<li>CIMB INVESTMENT BANK BERHAD</li>
								<li>COLGATE-PALMOLIVE (M) SDN BHD</li>
								<li>COMMERCE DOT COM SDN BHD</li>
								<li>CREDIT GUARANTEE CORPORATION</li>
								<li>CSR CLIMATE CONTROL (M) SDN BHD</li>
								<li>DANONE DUMEX (M) SDN BHD</li>
								<li>DEWAN BANDARAYA KUCHING UTARA</li>
								<li>DIC COMPOUNDS (M) SDN BHD</li>
								<li>DUOPHARMA (M) SDN BHD</li>
								<li>EMERY OLEOCHEMICALS (M) SDN BHD</li>
								<li>EON BANK ERHAD</li>
								<li>EPSON MALAYSIA SDN BHD</li>
								<li>ETIQA INSURANCE BERHAD</li>
								<li>ETIQA TAKAFUL BERHAD</li>
								<li>EXXONMOBIL EXPLORATION &amp; PRODUCTION (M) INC.</li>
								<li>F &amp; B BEVERAGES MANUFACTURING SDN BHD</li>
								<li>FABER GROUP BERHAD</li>
								<li>FELDA IFFCO SDN BHD</li>
								<li>GALLANT ELECTRONIC COMPANY (M) SDN BHD</li>
								<li>GENTLE SUPREME SDN BHD</li>
								<li>GLEANEAGLES HOSPITAL (KL) SDN BHD</li>
								<li>HIAP HUAT CHEMICALS SDN BHD</li>
								<li>HONDA MALAYSIA SDN BHD</li>
								<li>HSBC BANK MALAYSIA BERHAD</li>
								<li>ING ASIA/PACIFIC LTD</li>
								<li>INSTITUT JANTUNG NEGARA</li>
								<li>IPERINTIS SDN BHD</li>
								<li>ISKANDAR INVESTMENT BERHAD</li>
								<li>ISMECA MALAYSIA SDN BHD</li>
								<li>JACY FOOD SDN BHD</li>
								<li>JARING COMMUNICATION SDN BHD</li>
								<li>JASMINE FOOD CORPORATION SDN BHD</li>
								<li>JEBSEN &amp; JESSEN COMMUNICATIONS SOLUTIONS (M) SDB BHD</li>
								<li>JOHNSON CONTROL AUTOMOTIVE SEATING SDN BHD</li>
								<li>JOHNSON CONTROLS (M( SDN BHD</li>
								<li>JOHOR CORPORATION</li>
								<li>KELANA JAYA MEDICAL CENTRE</li>
								<li>KIAN JOO CAN FACTORY BERHAD</li>
								<li>KLCC (HOLDINGS) SDN BHD</li>
								<li>KONTENA NASIONAL BERHAD</li>
								<li>KUANTAN MEDICAL CENTRE SDN BHD</li>
								<li>KUASA NUSAJAYA SDN BHD</li>
								<li>KULIM TECHNOLOGY PARK CORPORATION SDN BHD</li>
								<li>LABUAN SHIPYARD &amp; ENGINEERING SDN BHD</li>
								<li>LAFARGE CEMENT SDN BHD</li>
								<li>LEMBAGA TABUNG HAJI</li>
								<li>LIANGTYE TRADING SDN BHD</li>
								<li>MAA HOLDING BERHAD</li>
								<li>MAGNIFICENT DIAGRAPH SDN BHD (CARREFOUR)</li>
								<li>MALAYAN BANKING BERHAD</li>
								<li>MALAYSIA AIRPORTS HOLDINGS BERHAD</li>
								<li>MALAYSIA DEBT VENTURES BERHAD</li>
								<li>MALAYSIA MARINE &amp; HEAVY ENGINEERING</li>
								<li>MALAYSIA SHEET GLASS SDN BHD</li>
								<li>MALAYSIA SMELTING CORPORATION BERHAD</li>
								<li>MALAYSIA TRANSFORMER MANUFACTURING SDN BHD</li>
								<li>MAXIS MOBILE SDN BHD</li>
								<li>MCIS ZURICH INSURANCE BERHAD</li>
								<li>MEAD JOHNSON (M) SDN BHD</li>
								<li>METAL RECLAMATION (INDUSTRIES) SDN BHD</li>
								<li>MIMOS BERHAD</li>
								<li>MISC BERHAD</li>
								<li>MNRB HOLDING BERHAD</li>
								<li>MTBE MALAYSIA SDN BHD</li>
								<li>NATIONWIDE EXPRESS COURIER SERVICES BERHAD</li>
								<li>NEWFIELD PENINSULA MALAYSIA INC</li>
								<li>NORMAH MEDICAL SPECIALIST CENTRE</li>
								<li>NORTHPORT (M) BERHAD</li>
								<li>OSRAM OPTO SEMICONDUCTORS (M) SDN BHD</li>
								<li>PADIBERAS NASIONAL BERHAD</li>
								<li>PELABUHAN TANJUNG PELEPAS</li>
								<li>PERBADANAN BEKALAN AIR PULAU PINANG</li>
								<li>PERFECT FOOD MANUFACTURING (M) SDN BHD</li>
								<li>PERODUA MANUFACTURING SDN BHD</li>
								<li>PERODUA SALES SDN BHD</li>
								<li>PERUSAHAAN OTOMOBIL KEDUA SDN BHD</li>
								<li>PETROLIAM NASIONAL BERHAD</li>
								<li>PETRONAS CARIGALI SDN BHD</li>
								<li>PETRONAS EAST COAST REGIONAL OFFICE</li>
								<li>PETRONAS GAS BERHAD</li>
								<li>PFIZER (M) SDN BHD</li>
								<li>PHARMANIAGA LOGISTICS SDN BHD</li>
								<li>PHARMANIAGA MANUFACTURING BERHAD</li>
								<li>PLUS EXPRESSWAY BERHAD</li>
								<li>POWER ROOT (M) SDN BHD</li>
								<li>PRESS METAL BERHAD</li>
								<li>PRIME SOURCING INTERNATIONAL SDN BHD</li>
								<li>PROJEK PENYELENGARAAN LEBUHRAYA BERHAD</li>
								<li>PROKHAS SDN BHD</li>
								<li>PROTON EDAR SDN BHD</li>
								<li>PUSAT PUNGUTAN ZAKAT</li>
								<li>QL FOODS SDN BHD</li>
								<li>RAMLY FOOD PROCESSING SDN BHD</li>
								<li>RHB BANKING GROUP</li>
								<li>S.C. JOHNSON &amp; SON (M) SDN BHD</li>
								<li>SABAH ELECTRICITY SDN BHD</li>
								<li>SALCON BERHAD</li>
								<li>SANJUNG ETIKA SDN BHD</li>
								<li>SARA LEE MALAYSIA SDN BHD</li>
								<li>SARAWAK ECONOMIC DEVELOPMENT CORPORATION</li>
								<li>SARAWAK ENERGY BERHAD</li>
								<li>SARAWAK PLANTATION BERHAD</li>
								<li>SARAWAK PLANTATION SERVICES SDN BHD</li>
								<li>SARKU ENGINEERING SERVICES SDN BHD</li>
								<li>SECURITIES COMMISSION</li>
								<li>SILTERRA (M) SDN BHD</li>
								<li>SILVERLAKE SDN BHD</li>
								<li>SIME DARBY HOLDINGS BERHAD</li>
								<li>SIME KANSAI PAINTS SDN BHD</li>
								<li>SME BANK</li>
								<li>SOUTHERN LION SDN BHD</li>
								<li>SURIA CAPITAL HOLDINGS BERHAD</li>
								<li>SUSHI KIN SDN BHD</li>
								<li>SYARIKAT PRASARANA NEGARA BERHAD</li>
								<li>SYMPHONY BPO SOLUTIONS SDN BHD</li>
								<li>T.A. FURNITURE SDN BHD</li>
								<li>TALISMAN MALAYSIA LIMITED</li>
								<li>TDM BERHAD</li>
								<li>TEKNIK JANAKUASA SDN BHD</li>
								<li>THE NEW STRAITS TIMES PRESS (M) BERHAD</li>
								<li>THE ROYAL BANK OF SCOTLAND BERHAD</li>
								<li>TIOXIDE (M) SDN BHD</li>
								<li>TITAN PETCHEM (M) SDN BHD</li>
								<li>TL OFFSHORE SDN BHD</li>
								<li>TNB ENGINEERING CORPORATION SDN BHD</li>
								<li>TNB FUEL SERVICES SDN BHD</li>
								<li>TOMEI CONSOLIDATED BERHAD</li>
								<li>TOP GLOVE SDN BHD</li>
								<li>TOSHIBA ELECTRONICS MALAYSIA SDN BHD</li>
								<li>TOUCH 'N' GO</li>
								<li>TRADEWINDS (M) BERHAD</li>
								<li>TRADEWINDS PLANTATION BERHAD</li>
								<li>TRANSMILE AIR SERVICES SDN BHD</li>
								<li>TRICUBENCR JV SDN BHD</li>
								<li>UDI MARKETING SDN BHD</li>
								<li>UMW CORPORATION SDN BHD</li>
								<li>UNITED MS ELECTRICAL MFG (M) SDN BHD</li>
								<li>UNITED OVERSEAS BANK (M) BHD</li>
								<li>UTUSAN MELAYU (M) BERHAD</li>
								<li>VALUECAP SDN BHD</li>
								<li>WESTERN DIGITAL (M) SDN BHD</li>
								<li>WESTPORTS MALAYSIA SDN BHD</li>
								<li>WORLDWIDE HOLDINGS BERHAD</li>
								<li>YEE LEE TRADING CO. SDN BHD</li>
								<li>ZECON ENGINEERING BHD</li>
							</ol>
							<br />
								<h3>Government</h3>
							<ol>
								<li>AKADEMI AUDIT NEGARA</li>
								<li>BANK NEGARA MALAYSIA</li>
								<li>BINTULU DEVELOPMENT AUTHORITY</li>
								<li>DEWAN BANDARAYA KUCHING UTARA</li>
								<li>INSTITUT KUMPULAN WANG SIMPANAN PEKERJA</li>
								<li>JABATAN AUDIT NEGARA</li>
								<li>JABATAN KASTAM DIRAJA MALAYSIA</li>
								<li>JABATAN KETUA MENTERI NEGERI SARAWAK</li>
								<li>KEMENTERIAN LUAR NEGERI</li>
								<li>KEMENTERIAN PERDAGANGAN DALAM NEGERI</li>
								<li>LEMBAGA TABUNG HAJI</li>
								<li>MALAYSIAN COMMUNICATION AND MULTIMEDIA COMMISSION</li>
								<li>MINISTRY OF FOREIGN AFFAIRS</li>
								<li>MINISTRY OF TRANSPORT MALAYSIA</li>
								<li>PERBADANAN KEMAJUAN NEGERI SELANGOR</li>
								<li>PERTUBUHAN KESELAMATAN SOSIAL</li>
								<li>SURUHANJAYA KOMUNIKASI DAN MULTIMEDIA MALAYSIA</li>
								<li>UNIVERSITI TEKNIKAL MALAYSIA MELAKA</li>
							</ol>
						</div>
					</div>
				</div>
			</div>

			<br />
			<hr />
			<br />

			<div class="accordion" id="testimonial_accordion">
				<div class="accordion-group">
					<h2 class="expand" id="testimonial">Testimonial &nbsp;
						<a class="expand" class="accordion-toggle" data-toggle="collapse" data-parent="#testimonial_accordion" href="#collapseTwo">
							<input type="button" class="btn btn-primary btn-expand" id="testimonial_expand" onclick="change2()" value="+" />
						</a>
						<p class="no-top-margin no-top-padding"><small>What participants say about our training:</small></p>
					</h2>
					<div class="accordion-inner">
						<blockquote>
							<p>The trainer is well versed; he is very expert in negotiation skills and tactics.</p>
							<small>Assistant Key Account Manager, <cite title=" F &amp; N Beverages Marketing Sdn Bhd"> F &amp; N Beverages Marketing Sdn Bhd</cite></small>
						</blockquote>
						<blockquote>
							<p>Refreshing! Brief and concise handout.  I really like the role play session and the game which used scenario planning method. The case studies are tested against real life situation.</p>
							<small>Assistant Manager, <cite title="Measat Broadcast Network System Sdn Bhd">Measat Broadcast Network System Sdn Bhd</cite></small>
						</blockquote>
					</div>
					<div id="collapseTwo" class="accordion-body collapse in">
						<div class="accordion-inner">
							<blockquote>
								<p>I will definitely apply all the information &amp; knowledge that I’ve learnt from this training. Shaun Belding is a brilliant guy; the use of the latest approach is very practical in delivery. He really gives full explanation on how to use social media to boost up customer services.</p>
								<small>Assistant Manager, <cite title="Permodalan Nasional Berhad">Permodalan Nasional Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>He is very experience and has positive approach on all issues. After this, it will be more structured way to identify the potential partner. His explanation is very easy to understand especially about the human trust relationship and I’m now clear about stages of relationship &amp; partnership development.</p>
								<small>Assistant Vice President, <cite title="Malakoff">Malakoff</cite></small>
							</blockquote>
							<blockquote>
								<p>I like the content of the course very much. When he taught us about the evaluation matrix, he definitely makes the whole thing simple. I believe that I can easily examine and identify the best method in PFM after thus. What I can say is he is very professional and competent in Facilities Management.</p>
								<small>Assistant Vice President, <cite title="Maybank">Maybank</cite></small>
							</blockquote>
							<blockquote>
								<p>The trainer of Fraud Investigation &amp; Risk Management is very experience, informative and has a very broad understanding of the course. This session is not bored at all because the trainer is very interactive with the participants.</p>
								<small>Auditor, <cite title="Jabatan Audit Negara">Jabatan Audit Negara</cite></small>
							</blockquote>
							<blockquote>
								<p>Satisfied with the real life examples and case studies given by the negotiation expert.</p>
								<small>Business Development Executive, <cite title="MISC Berhad">MISC Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>It was compact and practical! Dr. Jay is a very experience trainer in the area of Predictive Maintenance Analytics.</p>
								<small>Building Maintenance Executive, <cite title="Petronas Carigali-SBO">Petronas Carigali-SBO</cite></small>
							</blockquote>
							<blockquote>
								<p>I like the real life experience sharing by the trainer. The use of games in the course make us clear about the whole process and what he is actually trying to convey to us. He shared the ideas on how to request budget from the management and also the ways on how to use the budget efficiently.</p>
								<small>Civil Engineer, <cite title="Malaysia Airports Holdings Berhad">Malaysia Airports Holdings Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>The trainer gave lots of informative strategies on how to handle difficult customers and understand customers need. I have learnt the Customer Service Complaint Handling Systems and also the compliment systems. I would say that there are only positive words to response when receiving complaints from customers and never say "NO" to them.</p>
								<small>Customer Service Executive, <cite title="Bintulu Port Sdn Bhd">Bintulu Port Sdn Bhd</cite></small>
							</blockquote>
							<blockquote>
								<p>Practical technique of handling difficult customers are presented with simple logical manner well plus real life case studies are really well selected to make learning more fun</p>
								<small>Customer Service Manager, <cite title="Heitech Padu Bhd">Heitech Padu Bhd</cite></small>
							</blockquote>
							<blockquote>
								<p>He has highlighted the key areas of risks that were overlooked by my organization</p>
								<small>Director, <cite title="Sarawak Plantation Berhad">Sarawak Plantation Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>High level of confidence coupled with experience has enabled him to meet our objectives. I have learnt many things related to risk such as the methodologies of risk, risk identification, audit reporting and testing, audit planning, fraud findings, developing audit strategies and risk based plans.</p>
								<small>Director/CEO, <cite title="Sarawak Foundation">Sarawak Foundation</cite></small>
							</blockquote>
							<blockquote>
								<p>He is a good investigator. I do learn the investigation techniques from him.</p>
								<small>Enforcement Superintendant, <cite title="Royal Malaysian Customs">Royal Malaysian Customs</cite></small>
							</blockquote>
							<blockquote>
								<p>Trainer is well experienced. The Service Level Agreement knowledge that was learnt during the course is very much related to my job function. I will organize one special team to recheck and review our current SLA based on what I have learnt from this course.</p>
								<small>Engineer, <cite title="Kumpulan Wang Simpanan Pekerja">Kumpulan Wang Simpanan Pekerja</cite></small>
							</blockquote>
							<blockquote>
								<p>Shaun Belding has taught me to identify the weaknesses in people management. Besides, he shared to me the right way to talk to problematic staffs, which is by providing positive feedback towards creating positive attitudes.</p>
								<small>Engineering Manager, <cite title="Star Publication">Star Publication</cite></small>
							</blockquote>
							<blockquote>
								<p>It was a great combination of theories with real business application. Smart Supply Chain Management has taught me how to select the right supplier in the future.</p>
								<small>Executive Planning, <cite title="Petronas Dagangan Berhad">Petronas Dagangan Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>By attending Customer Service in the Social Media Age, now I know what exactly the roles and the importance of social media in an organization. After this I will know how to response and give feedback to customers via social media tools especially Twitter.</p>
								<small>Head of Customer Service, <cite title="Perbadanan Bekalan Air Pulau Pinang">Perbadanan Bekalan Air Pulau Pinang</cite></small>
							</blockquote>
							<blockquote>
								<p>"I have learnt the new tools and knowledge in project management and also the problem solving together with the decision making. Project Driven Management in Facilities Management is really a value added to FM team in order to support the core business of the organization.</p>
								<small>Head of Property Management, <cite title="Etiqa Insurance Berhad">Etiqa Insurance Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>The way he explained is really direct to the point. I really like it because it makes the process simple and easy to understand. The best things I have learnt from this course is the 7 Steps Harvard Negotiation Method.</p>
								<small>Head of Purchasing, <cite title="Maybank Berhad">Maybank Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>This is an eye opener of what the real Continuous Auditing is all about whereby the trainer taught us about the new skills to perform continuous auditing and continuous monitoring. I surely will recommend this course to my colleagues.</p>
								<small>Internal Audit Manager, <cite title="Malaysia Alliance Assurance Berhad">Malaysia Alliance Assurance Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>I like this workshop very much. John Barrett has presented the programme very well. Excellent, good &amp; very interactive and made the learning very clear for us.</p>
								<small>Internal Audit Manager, <cite title="Perbadanan Tabung Amanah Islam Brunei">Perbadanan Tabung Amanah Islam Brunei</cite></small>
							</blockquote>
							<blockquote>
								<p>I have learnt something new and valuable. This course has taught me to understand more about warehousing techniques, inventory management (warehouse management), material handlings and warehousing roles. I would say that I’ve learnt new techniques on how to improve my inventory accuracy.</p>
								<small>Inventory Manager, <cite title="Negeri Sembilan Cement Sdn Bhd (CIMA)">Negeri Sembilan Cement Sdn Bhd (CIMA)</cite></small>
							</blockquote>
							<blockquote>
								<p>Steve Allen has shared brilliant information about covert investigation, interviewing techniques and forensic tools. Yes! I would recommend this course to my colleagues.</p>
								<small>Investigation Officer, <cite title="Bank Islam Malaysia Berhad">Bank Islam Malaysia Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>This course taught me to understand more from the buyer’s point of view and understanding their style and tactics.</p>
								<small>Key Account Manager, <cite title="F &amp; N Beverages Marketing Sdn Bhd">F &amp; N Beverages Marketing Sdn Bhd</cite></small>
							</blockquote>
							<blockquote>
								<p>Stuart Jay Raj is a great facilitator with vast experience in modern trade worldwide.  In Negotiating Better Terms and Conditions with Modern Trade Retailers, he taught us the way to do research on customer background and to understand them in-depth. Besides, he has shared the fundamental of the retailers mind.</p>
								<small>Key Account Manager, <cite title="F &amp; N Dairies">F &amp; N Dairies</cite></small>
							</blockquote>
							<blockquote>
								<p>The trainer has a very good sense of humour. He taught us concisely with the vast knowledge that he has. I like the role play that was conducted in a small group; which I found is more interactive. As a person that handling with different types of attitudes, I am now more confident to coach and know how to handle problematic people at my work place. It does definitely will make me a better leader.</p>
								<small>Maintenance Manager, <cite title="Air Asia Berhad">Air Asia Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>Great! I really  like Mr Terry Shannon’s presentation especially on the detailed explanation &amp; the real life examples given in class</p>
								<small>Maintenance Manager, <cite title="Mahkota Medical Centre">Mahkota Medical Centre</cite></small>
							</blockquote>
							<blockquote>
								<p>I like the activity based training such as the creative ice breaker games and energizing exercises. Fun learning and I have learnt a lot of practical training ideas from Donna.</p>
								<small>Manager Human Resource, <cite title="TNB">TNB</cite></small>
							</blockquote>
							<blockquote>
								<p>She is very experienced and helpful. Course content was very well delivered. I believe that I can apply Competency Based Interviewing at my workplace.</p>
								<small>Manager, <cite title="MISC Berhad">MISC Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>Catherine Norton’s teaching is very interesting and clear. She is very energetic, &amp; managed to impart some of the new management ideas during the workshop.</p>
								<small>Manufacturing Manager, <cite title="Freescale Semiconductors (M) S/B">Freescale Semiconductors (M) S/B</cite></small>
							</blockquote>
							<blockquote>
								<p>It really open my eyes in order to be a good leader/manager. He explained in details about coaching and improving individual performance and observing staff performance and behaviors.</p>
								<small>Manufacturing Manager, <cite title="Osram Opto Semiconductors">Osram Opto Semiconductors</cite></small>
							</blockquote>
							<blockquote>
								<p>This workshop gives me a real picture about Theory of Constraints and also has furnished me the ways to manage conflicts at the work place.</p>
								<small>Operation Manager, <cite title="FPG Oleochemicals Sdn Bhd">FPG Oleochemicals Sdn Bhd</cite></small>
							</blockquote>
							<blockquote>
								<p>The knowledge provided in the course not only to be applied at work but also in our daily life. It helps us to enhance our personal level of confidence in terms of negotiation skills.</p>
								<small>Operation Manager, <cite title="MISC Berhad">MISC Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>Global logistic issues are the topic described best by the speaker. From this course entitled Advanced Purchasing &amp; Outsourcing Strategies, I also have learnt about the procurement process to be done by various industries, green purchasing and the scoreboard related to internal performance measurement.</p>
								<small>Procurement Executive, <cite title="Labuan Shipyard &amp; Engineering Sdn Bhd">Labuan Shipyard &amp; Engineering Sdn Bhd</cite></small>
							</blockquote>
							<blockquote>
								<p>Confidence is the key of a successful negotiator. The preparation for plans, tactics and language to use in the presentation is very much important during the negotiation.</p>
								<small>Procurement Executive, <cite title="MISC Berhad">MISC Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>I like the group discussion and the inter-industries sharing. We have shared about procurement strategies and outsourcing strategies to each other.</p>
								<small>Procurement Executive, <cite title="Primesourcing International Sdn Bhd">Primesourcing International Sdn Bhd</cite></small>
							</blockquote>
							<blockquote>
								<p>I will definitely going to use The 22-Tool Box taught by Mr. George Boulden and will recommend the same course to my colleagues in future.</p>
								<small>Procurement Manager, <cite title="Carlsberg Brewery">Carlsberg Brewery</cite></small>
							</blockquote>
							<blockquote>
								<p>Overall course are very good. It taught us effective communication from A-Z and it does really will help me to improvise my communication skills during my negotiation.</p>
								<small>Purchasing Expeditor, <cite title="Cabot (M) Sdn Bhd">Cabot (M) Sdn Bhd</cite></small>
							</blockquote>
							<blockquote>
								<p>Great! The role play is very interesting and informative. It helps me to clearly understand the whole picture of a good negotiation.</p>
								<small>Purchasing Speacialist, <cite title="Colgate Palmolive (M) Sdn Bhd">Colgate Palmolive (M) Sdn Bhd</cite></small>
							</blockquote>
							<blockquote>
								<p>I will definitely recommend this course to my colleagues and friends. This course is impressive and 100% agree that it will help to sharpen my multitasking skills especially in handling various projects. The most important thing is to prioritize the project which is to select the most profitable and linking with organization goals.</p>
								<small>Senior General Manager, <cite title="Padi Beras Nasional Berhad">Padi Beras Nasional Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>The trainer has successfully outlined the various styles of negotiations and its applicability in a real life working situation. The practical experiences shared by the trainer make me very much satisfied with the course.</p>
								<small>Senior Legal Counsel, <cite title="iPerintis Sdn Bhd">iPerintis Sdn Bhd</cite></small>
							</blockquote>
							<blockquote>
								<p>Dr. Carlo is a very well verse on the area and subject matter covered. He always relates the life history and experiences to the subject of the course. The course has opened out my mind. Now I know that Lean Management implementation needs high level of human involvement.</p>
								<small>Senior Manager, <cite title="Bank Islam Malaysia Berhad">Bank Islam Malaysia Berhad</cite></small>
							</blockquote>
							<blockquote>
								<p>This workshop is very practical. Dr Hillson is well known about the subject matter. Yes. I would recommend this course to my colleagues.</p>
								<small>Senior Manager Corporate Planning, <cite title="Bank Pertanian Malaysia">Bank Pertanian Malaysia</cite></small>
							</blockquote>
							<blockquote>
								<p>I like the content of the workshop. Topics are very relevant to our current Key Account team.</p>
								<small>Senior Manager Key Account, <cite title="Reckitt Benckiser">Reckitt Benckiser</cite></small>
							</blockquote>
							<blockquote>
								<p>The course is very interesting! We have learnt the skills to predict breakdown. By having such prediction, we will always ready with the solution which will be able to minimize the cost of repairing and maintaining the breakdown. This is the new innovative approach of Predictive Maintenance that I believe can be applied to our factory.</p>
								<small>Technical &amp; Engineering Director, <cite title="Osram OS Sdn Bhd">Osram OS Sdn Bhd</cite></small>
							</blockquote>
						</div> <!-- end of accordion-inner -->
					</div> <!-- end of collapseTwo -->
				</div> <!-- end of accordion-group -->
			</div> <!-- end of testimonial_accordion -->

