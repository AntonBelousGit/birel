@extends('layouts.app')

@section('front_style')
    <link rel="stylesheet" href="{{ asset('css/pages/page-terms-of-use.min.css') }}">
@endsection

@section('front_scripts')
    <script src="{{ asset('js/pages/page-mission.min.js')}}" type="module"></script>
@endsection

@section('content')
    <main class="bg-site">
        <div class="container">
            <div class="tou-box">
                @include('front.layouts.nav')
                <div class="text-tou">
                    <h1>
                		Privacy policy
                	</h1>
                	<h4>
                		Last updated of the Policy: May ____, 2022
                	</h4>
                	<p>
                		This Policy describes the Company’s policies and procedures on collecting, using, and disclosing the User’s
                		information when the User uses the Online Service and tells the User about privacy rights and how the law
                		protects the User.<br>
                		The Company uses the User’s Personal Data that was provided by the Users the Company to provide and improve the
                		Service and the Website. By using the Website, the User agrees to collect and use information following this
                		Policy.<br>
                		The Policy makes in compliance with Articles 12,13, and 14 of the GDPR and CCPA.
                	</p>
                	<h2>
                		I. Interpretation And Definitions
                	</h2>
                	<h3>
                		Interpretation
                	</h3>
                	<p>
                		The words in which the initial letter is capitalized have meanings defined under the following conditions. The
                		following definitions shall have the same meaning regardless of whether they appear in singular or plural.
                	</p>
                	<h3>
                		Definitions
                	</h3>
                	<p>
                		For the purposes of this Policy:
                		<br><strong>“The User” </strong>means any person who visits the Company’s Website and uses the Company’s Online
                		Services and has a registered account on the Website.
                		<br><strong>“Device” </strong> means any device that can access the Website such as a computer, a telephone, or
                		a digital tablet.
                		<br><strong>“GDPR” </strong> means general data protection rules relating to the protection of natural persons
                		about the processing of personal data and rules relating to the free movement of Personal Data.
                		<br><strong>“Website” </strong> means the Company’s web platform for the User’s mobile devices or computers
                		which can be used through a browser without downloading, under the name (domain) of ________________, and it is
                		not affiliated with any other websites, company, brand, organisation, or similarly named entity resembling it.
                		<br><strong>“Online Service or Service” </strong> means the Company’s products and services that are publicly
                		available in a full version on the Website after registration. Service includes the following: a P2P platform
                		that allows the shareholders to find a demand for their assets before a liquidity event, and the investors to
                		purchase the shares in high-demand assets.
                		<br><strong>“Personal Data” </strong> means any information relating to an identified or identifiable natural
                		person (“data subject”); an identifiable natural person is one who can be identified, directly or indirectly, in
                		particular by reference to an identifier such as a name, location data, an online identifier, etc.
                		<br><strong>“Processing” </strong> means any operation or set of operations that are performed on personal data
                		or sets of personal data, whether by automated means, such as collection, recording, organisation, structuring,
                		storage, adaptation or alteration, retrieval, consultation, use, disclosure by transmission, dissemination or
                		otherwise making available, alignment or combination, restriction, erasure, or destruction
                		<br><strong>“The Company” </strong> means name of the Company: ______________, registered number: _____________,
                		with its principal place of business: _____________.
                		<br><strong>“Usage Data” </strong> refers to data collected automatically, either generated using the Online
                		Service or from the Online Service infrastructure itself (for example, the duration of a visit, website usage,
                		and numbers of users).
                	</p>
                	<h2>
                		II. Collecting And Using The User's Personal Data
                	</h2>
                	<h3>
                		Personal data
                	</h3>
                	<p>
                		While using the Company’s Website, the Company may ask the User to provide the Company with certain personally
                		identifiable information that can be used to contact or identify the User. Personally, identifiable information
                		may include, but is not limited to:
                	</p>
                	<ul>
                		<li>
                			- email address;
                		</li>
                		<li>
                			- first and last name of the User (when you add the payment information);
                		</li>
                		<li>
                			- country of the User;
                		</li>
                		<li>
                			- name of the Company;
                		</li>
                		<li>
                			- ID-card or passport if needed;
                		</li>
                		<li>
                			- age of the User;
                		</li>
                		<li>
                			- billing address.
                		</li>
                	</ul>
                	<p>
                		The Company has the right at any time at its sole discretion, to request the User to confirm their personal
                		information such as documents confirming the identity of the User.
                	</p>
                	<h2>
                		III. Usage Data
                	</h2>
                	<p>
                		Usage Data is collected automatically when using the Website.
                		Usage Data may include information, type of the Device, pages that the User visits, the time and date of the
                		User’s visit, the time spent on those pages, unique device identifiers and other diagnostic data.
                		When the User accesses the Website by or through a Device, the Company may collect certain information
                		automatically, including, but not limited to:
                	</p>
                	<ul>
                		<li>
                			- the type of Device that is used;
                		</li>
                		<li>
                			- Device unique ID;
                		</li>
                		<li>
                			- Device operating system;
                		</li>
                		<li>
                			- the type of internet browser that is used;
                		</li>
                		<li>
                			- unique Device identifiers and other diagnostic data.
                		</li>
                	</ul>
                	<h2>
                		IV. Information From Third-Party Social Media
                	</h2>
                	<p>
                		The Company allows the User to create an account and log in to use the Online Service through the following
                		Third-Party Social Media Services:
                	</p>
                	<ul>
                		<li>
                			- LinkedIn.
                		</li>
                	</ul>
                	<p>
                		If the User decides to register through or otherwise grant the Company access to a Third-Party Social Media
                		Service, the Company may collect Personal Data that is already associated with Your Third-Party Social Media
                		Service's account, such as the User’s name, email address, activities or contact list associated with that
                		account.
                		<br>The User may also have the option of sharing additional information with the Company through the Third-Party
                		Social Media Service's account. If the User chooses to provide such information and Personal Data, during
                		registration or otherwise, the User gives the Company permission to use, share, and store it in a manner
                		consistent with this Privacy Policy.
                	</p>
                	<h2>
                		V. Tracking Technologies And Cookies
                	</h2>
                	<p>
                		The Company use Cookies and similar tracking technologies to track the activity on the Company’s Website and
                		store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track
                		information and to improve and analyse the Website. The technologies that the Company uses may include:
                	</p>
                	<ol>
                		<li>
                			<strong>- Cookies or Browser Cookies.</strong> A cookie is a small file placed on the User’s Device. You
                			can instruct the browser to refuse all Cookies or to indicate when Cookie is being sent. However, if the
                			User does not accept Cookies, the User may not be able to use some parts of the Website.
                		</li>
                		<li>
                			<strong>- Flash Cookies.</strong> Certain features of the Website may use local stored objects (or Flash
                			Cookies) to collect and store information about the User’s or s’ preferences or activity on the Online
                			Service. Flash Cookies are not managed by the same browser settings as those used for Browser Cookies.
                		</li>
                		<li>
                			<strong>- Web Beacon.</strong> Certain sections of the Website and the Company’s emails may contain
                			small electronic files known as Web Beacons (also referred to as clear gifs, pixel tags, and single-pixel
                			gifs) that permit the Company, for example, to count guests who have visited those pages or opened an email
                			and for other related website statistics (for example, recording the popularity of a certain section and
                			verifying system and server integrity).
                		</li>
                	</ol>
                	<p>
                		Cookies can be “Persistent” or “Session” Cookies. Persistent Cookies remain on the User’s personal Devices when
                		the User goes offline, while Session Cookies are deleted as soon as the User closes the web browser.
                		The Company uses both Session and Persistent Cookies for the purposes set out below:
                	</p>
                	<h3>
                		Necessary/Essential Cookies
                	</h3>
                	<p>
                		Type: Session Cookies
                		<br>Administered by the Company
                		<br>Purpose: These Cookies are essential for providing the User with services available through the Website and
                		to enable the User to use some of its features. They help to authenticate users. Without these Cookies, the
                		services that the User has asked for cannot be provided, and the Company only use these Cookies to provide the
                		User and/or s with those services.
                	</p>
                	<h3>
                		Cookies Policy/Notice Acceptance Cookies
                	</h3>
                	<p>
                		Type: Persistent Cookies
                		<br>Administered by the Company
                		<br>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.
                	</p>
                	<h3>
                		Functionality Cookies
                	</h3>
                	<p>
                		Type: Persistent Cookies
                		<br>Administered by the Company
                		<br>Purpose: These Cookies allow the Company to remember the choices the User makes when using the Website, such
                		as remembering the User’s login details or language preference. The purpose of these Cookies is to provide the
                		User and/or s with a more personal experience and to avoid the User having to re-enter preferences every time
                		the User uses the Website.
                	</p>
                	<h3>
                		Advertising Cookies
                	</h3>
                	<p>
                		Administered by the Company
                		<br>Purpose: Those cookies can be turned on and off by the Website to deliver potential customers the best
                		advertising experience. They do not contain personal information and are based on the User’s actions over the
                		Website.
                	</p>
                	<h2>
                		VI. Use Of The User's Personal Data
                	</h2>
                	<p>
                		The Company may use Personal Data for the following purposes:
                		<br><strong>To provide and maintain the Website,</strong> including monitoring the usage of the Website.
                		<br><strong>For the performance of a contract:</strong> the development, compliance and undertaking of the
                		purchase contract for the products, items, or services the User has purchased or of any other contract with the
                		Company through the Website.
                		<br><strong>To provide the User</strong> with news, special offers and general information about other goods,
                		services, and events that the Company offers that are like those that the User has already purchased or enquired
                		about unless the User has opted not to receive such information.
                		<br><strong>To manage the User’s requests:</strong> To attend to and manage the User’s and/or s' requests to the
                		Company.
                		<br><strong>For business transfers:</strong> the Company may use the User’s information to evaluate or conduct a
                		merger, divestiture, restructuring, reorganization, dissolution, or another sale or transfer of some or all the
                		Company’s assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in
                		which Personal Data held by the Company about the Website users is among the assets transferred.
                		<br><strong>For other purposes:</strong> the Company may use the User’s and/or s’ information for other
                		purposes, such as data analysis, identifying usage trends, determining the effectiveness of the Company’s
                		promotional campaigns, and evaluating and improving the Website, products, services, marketing, and the User’s
                		experience.
                		<br>The Company may share the User’s Personal Data in the following situations:
                	</p>
                	<ol>
                		<li>
                			<strong>- With service providers:</strong> the Company has the right to share the User’s Personal Data with
                			service providers to monitor and analyse the use of the Website, and to contact the User.
                		</li>
                		<li>
                			<strong>- For business transfers:</strong> the Company may share or transfer the User’s Personal Data in
                			connection with, or during negotiations of, any merger, sale of the Company assets, financing, or
                			acquisition of all or a portion of the Company’s business to another company.
                		</li>
                		<li>
                			<strong>- With Affiliates:</strong> the Company has the right to share the User’s Personal Data with the
                			Company’s affiliates, in which case the Company will require those affiliates to honour this Privacy Policy.
                			Affiliates include the Company’s parent company and any other subsidiaries, joint venture partners or other
                			companies that the Company controls or that are under common control with the Company.
                		</li>
                		<li>
                			<strong>- With business partners:</strong> the Company has the right to share the User’s Personal Data with
                			business partners to offer the User certain products, services, or promotions.
                		</li>
                		<li>
                			<strong>- With the User’s Consent:</strong> the Company has the right to disclose the User’s personal
                			information for any other purpose with the User’s consent.
                		</li>
                	</ol>
                	<h2>
                		VII. Retention Of The User's Personal Data
                	</h2>
                	<p>
                		The Company will retain the User’s Personal Data only for as long as is necessary for the purposes set out in
                		this Privacy Policy.
                		<br>The Company will retain and use the User’s Personal Data to the extent necessary to comply with the
                		Company’s legal obligations (for example, if we are required to retain the User’s Personal Data to comply with
                		applicable laws), resolve disputes, and enforce our legal agreements and policies.
                		<br>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for
                		a shorter period, except when this Personal Data is used to strengthen the security or to improve the
                		functionality of the Website, or the Company are legally obligated to retain this data for longer periods.
                	</p>
                	<h2>
                		VIII. Transfer Of The User's Personal Data
                	</h2>
                	<p>
                		The User’s information, including Personal Data, processing by the Company’s operating offices and in any other
                		places where the parties involved in the processing are located. It means that this information may be
                		transferred to — and maintained on — computers located outside of the User’s state, province, country, or other
                		governmental jurisdiction where the data protection laws may differ from those of the User’s jurisdiction.
                		<br>The User’s consent to this Privacy Policy followed by submission of such information represents the User’s
                		agreement to that transfer.
                		<br>The Company will take all steps reasonably necessary to ensure that the User’s Personal Data is treated
                		securely and following this Privacy Policy and no transfer of the User’s Personal Data will take place to an
                		organization or a country unless there are adequate controls in place including the security of the User’s
                		Personal Data and other personal information.
                	</p>
                	<h2>
                		IX. Disclosure Of The User's Personal Data
                	</h2>
                	<h3>
                		Business Transactions
                	</h3>
                	<p>
                		If the Company is involved in a merger, acquisition or asset sale, the User’s Personal Data may be transferred.
                		The Company will provide notice before the User’s Personal Data is transferred and becomes subject to a
                		different Privacy Policy.
                	</p>
                	<h3>
                		Law enforcement
                	</h3>
                	<p>
                		Under certain circumstances, the Company may be required to disclose the User’s Personal Data if required to do
                		so by law or in response to valid requests by public authorities (e.g. a court or a government agency).
                	</p>
                	<h3>
                		Other legal requirements
                	</h3>
                	<p>
                		The Company may disclose the User’s Personal Data in the good faith belief that such action is necessary
                	</p>
                	<ul>
                		<li>
                			- Comply with legal obligations.
                		</li>
                		<li>
                			- Protect and defend the rights or property of the Company.
                		</li>
                		<li>
                			- Prevent or investigate possible wrongdoing in connection with the Website.
                		</li>
                		<li>
                			- Protect the personal safety of the User of the Online Service or the public.
                		</li>
                		<li>
                			- Protect against legal liability.
                		</li>
                	</ul>
                	<h2>
                		X. Children's Privacy Data
                	</h2>
                	<p>
                		The Company’s Website does not address anyone under the age of 18 (eighteen). The Company do not knowingly
                		collect personally identifiable information from anyone under the age of 18 (eighteen). If the User is a parent
                		or guardian and is aware that the child has provided the Company with Personal Data, please contact us.
                		<br>If the Company becomes aware that the Company has collected Personal Data from anyone under the age of 14
                		(fourteen) without verification of parental consent, the Company takes steps to remove that Personal Data from
                		the Company's servers or/and any storage used by the Company.
                		<br>If the Company needs to rely on consent as a legal basis for processing the User’s information and the
                		User’s country requires consent from a parent, the Company may require the User’s parent’s consent before the
                		Company collect and use that information.
                	</p>
                	<h2>
                		XI. Security Of The User's Personal Data
                	</h2>
                	<p>
                		The Company takes all reasonable steps to protect information that is received from the User from an accidental
                		or unlawful destruction, loss, alteration, and unauthorized disclosure or access. The Company has put in place
                		appropriate physical, technical and administrative measures to safeguard and secure the User’s information, and
                		the Company make use of privacy-enhancing technologies such as encryption. If you have any questions about the
                		security of your personal information, you can contact us VIA email: orders@birel.io.
                	</p>
                	<h2>
                		XII. Links To Other Websites
                	</h2>
                	<p>
                		The Company’s Website may contain links to other websites that are not operated by the Company. If the User
                		clicks on a third-party link, the User will be directed to that third-party’s website. The Company strongly
                		advise the User to review the Privacy Policy of every site that the User visit.
                		<br>The Company has no control over and assumes no responsibility for the content, privacy policies or practices
                		of any third-party sites or services.
                	</p>
                	<h2>
                		XIV. GDPR Notice
                	</h2>
                	<p>
                		The legal basis for processing the User’s Personal Data is Art. 6 sec. 1 a) b), f) Regulation (EU) 2016/679 of
                		the European Parliament and of the Council of 27 April 2016 on the protection of individuals about the
                		processing of personal data and the free movement of such data and repealing Directive 95/46 / MI Laws
                		UE.L.2016.119.1) (GDPR), where the legitimate interest of the Company is related to providing the Website for
                		the User.
                		<br>Personal Data will be processed for a period until an objection to data processing or termination is made,
                		but no longer than 10 (ten) years.
                		<br>The User has the right to access, correct, delete, or restrict his or her Personal Data or to object to the
                		processing, as well as the right to transfer the Personal Data and the right to complain to the supervisory
                		authority.
                		<br>In the case of obtaining data and processing them based on Art. 6 sec. 1 year a) GDPR – the User has the
                		right to withdraw consent at any time, without prejudice to the lawfulness of the processing carried out based
                		on consent to its withdrawal.
                		<br>To GDPR the Company is a data controller for the Personal Data collected from all categories of data
                		subjects listed above, with the following exceptions: the Company is a data processor of the User logs, and
                		administrative user logs. In addition, the Company is a data processor for any of the content provided by the
                		User through the Online Services that transit. Where the Company is a data processor, the Company processes data
                		on behalf of its the User under their data processing instructions.
                	</p>
                	<h2>
                		XV. Information For California Residents
                	</h2>
                	<p>
                		This section provides additional disclosures required by the California Consumer Privacy Act (or “CCPA”).
                		<br>Please see Chart “Categories of personal information we collect” below in this Policy for a list of the
                		personal information the Company has the right to collect about California consumers in the last 12 (twelve)
                		months, along with the Company's business and commercial purposes and categories of third parties with whom this
                		information may be shared. For more details about the personal information the Company collect, including the
                		categories of sources, please see the “Collecting and using Personal Data”.
                	</p>
                	<h3>
                		Categories of personal information we collect
                	</h3>
                	<p>
                		Internet or other electronic network activity, such as browsing behaviour and information about the User’s usage
                		and interactions with the Company’s Website.
                	</p>
                	<h3>
                		Parties with whom the information may be shared
                	</h3>
                	<p>
                		The third parties that provide services to the Company, such as those that assist us with customer support,
                		subscription and order fulfilment, advertising measurement, communications and surveys, data analytics, fraud
                		prevention, cloud storage, bug fix management and logging, and payment processing. The Company’s advertisers and
                		marketing partners, such as partners that help determine the popularity of the content, deliver advertising and
                		content targeted to the User’s interests and assist in better understanding the User’s online activity.
                		<br>Subject to certain limitations and exceptions, the CCPA provides California users with the right to request
                		to know more details about the categories and specific pieces of personal information, to delete their personal
                		information, to opt out of any “sales” that may be occurring, and to not be discriminated against for exercising
                		these rights.
                		<br>The Company do not “sell” the personal information we collect (and will not sell it in the future without
                		providing a right to opt out). The Company does allow our advertising partners to collect certain device
                		identifiers and electronic network activity via the Company’s Online Service to show ads that are targeted to
                		the User’s interests on other platforms. To opt out, the User can adjust Device settings to limit ad tracking
                		via the Website.
                		<br>California's users may make a rights request by emailing us at orders@birel.io. The Company will verify the
                		User’s request by asking user to provide information that matches the information the Company has on file about
                		the User. The User can also designate an authorized agent to exercise these rights on their behalf. Authorized
                		agents should submit requests through the same channels, but the Company will require proof that the person is
                		authorized to act on the User’s behalf and may also still ask the User to verify his/her identity with the
                		Company directly.
                	</p>
                	<h2>
                		XVI. Dispute Resolution
                	</h2>
                	<p>
                		This section provides additional disclosures required by the California Consumer Privacy Act (or “CCPA”).
                		<br>If you have an unresolved privacy or data use concern that the Company has not addressed satisfactorily,
                		please contact us via orders@birel.io.
                	</p>
                	<h2>
                		XVII. Contacts
                	</h2>
                	<p>
                		If you have any questions about this Policy, you can contact us:
                	</p>
                	<ul>
                		<li>
                			- by email: <a href="mailto:orders@birel.io">orders@birel.io.</a>
                		</li>
                	</ul>
                </div>
            </div>
        </div>
    </main>

@endsection
