<?php

$portfolio = (object) array(

    // 'experian-credit-expert' => (object) array(
    //  'slug'      => 'experian-credit-expert',
    //  'title'     => 'Experian Credit Expert',
    //  'text'      =>
    //      '<p>I know lying is wrong, but if the elephant man came in now in a blouse with some make up on, and said "how do I look?" Would you say — bearing in mind he\'s depressed and has respiratory problems — would you say "go and take that blusher off you mis-shapen headed elephant tranny"? No. You\'d say "You look nice... John"</p>
    //      <p>Minor criticism. I like to keep a bit more distance between the egg and the beans. I may want to mix them but that’s my decision. Use the sausage as a breakwater....but that’s nitpicking, on the whole a very good effort...Seven on ten. Let’s make love.</p>',
    //  'url'       => 'www.creditexpert.co.uk',
    //  'madewith'  => (object) array(
    //      'XHTML',
    //      'CSS',
    //      'JavaScript/jQuery',
    //      'Angular',
    //      'Swig'
    //  )
    // ),
    'gov-petitions' => (object) array(
        'slug'      => 'gov-petitions',
        'title'     => 'UK Government Petitions',
        'text'      => 'An experiment using the publicly-accessible government petitions API. Petitions are searchable by ID, data is returned to the browser and displayed using the KnockoutJS framework. The API is polled periodically to give a real-time update of the number of signatories.',
        'url'       => 'govpetitions.heyhudson.com',
        'github'    => 'gov-petitions',
        'madewith'  => (object) array(
            'XHTML',
            'CSS',
            'JavaScript/jQuery',
            'KnockoutJS'
        )
    ),
    // 'steve-bloomers-watching' => (object) array(
    //     'slug'      => 'steve-bloomers-watching',
    //     'title'     => 'Steve Bloomer\'s Watching',
    //     'text'      => '<p>As a season ticket holder at Derby County FC (for my sins!), I decided to create a blog in which to write match reports and articles on the club. The blog uses the basic WordPress engine which has been ripped out and integrated into a custom <abbr title="Hypertext Markup Language">HTML</abbr>5 template. The site also makes use of <abbr title="Cascading Style Sheets">CSS</abbr> media queries to enable a responsive layout across devices.</p>',
    //     'url'       => 'www.stevebloomerswatching.com',
    //     'github'    => 'www.github.com/simonhudson/foo',
    //     'madewith'  => (object) array(
    //         'XHTML',
    //         'CSS',
    //         'JavaScript/jQuery',
    //         'WordPress',
    //         'Photoshop'
    //     )
    // ),
    // 'nhs-choices' => (object) array(
    //     'slug'      => 'nhs-choices',
    //     'title'     => 'NHS Choices',
    //     'text'      =>
    //         '<p>Working on one of the largest websites in Europe, it was my responsibility to create front-end code to the highest standards and then liaise with the back-end developers to ensure it was integrated properly into the solution. Development was done on a Sharepoint/.NET platform using a process based on Agile and Kanban methodologies.</p>
    //         <p>As a public health information site, accessibility was at the forefront of everything we did, and as such my knowledge of progressive enhancement & graceful degradation, assistive technologies and cross-browser compatibility was increased hugely. We had regular contact with third parties, such as the R.N.I.B and AbilityNet and took action based on their recommendations and audits.</p>
    //         <p>As part of my role, I was responsible for reviewing wireframes/designs from the User Experience team and highlighting any potential issues regarding front-end implementation and/or accessibility. I worked closely with the Experience Architects and Designers to come up with solutions to any issues which arose and ensured they met all requirements, from both a front-end code and user experience point-of-view.</p>
    //         <p>I was also required to respond quickly to bug reports, both during the release cycle and once products had gone live. For this, I needed fast diagnostic skills regarding cross-browser issues and a thorough approach to testing my code fixes.</p>',
    //     'url'       => 'www.nhs.uk',
    //     'madewith'  => (object) array(
    //         'XHTML',
    //         'CSS',
    //         'JavaScript/jQuery',
    //         'Sharepoint',
    //         '.NET'
    //     )
    // ),
    // 'nhs-choices-pims' => (object) array(
    //     'slug'      => 'nhs-choices-pims',
    //     'title'     => 'NHS Choices Provider Information Management System',
    //     'text'      =>
    //         '<p>NHS Choices provided healthcare organisations (such as dentists, GPs and clinics) with an internal <abbr title="Content Management System">CMS</abbr> through which they could update their profile on the NHS website.</p>
    //         <p>The profiles were built up of customisable modules, allowing organisations to add videos, news articles, registration information, opening times and numerous other details about their service.</p>
    //         <p>Making heavy use of JavaScript and jQuery, it was a constantly evolving system which required regular updates and refinement in response to the needs of the organisations.</p>',
    //     'url'       => 'www.nhs.uk/Services/gp/Overview/DefaultView.aspx?id=39571',
    //     'madewith' => (object) array(
    //         'XHTML',
    //         'CSS',
    //         'JavaScript/jQuery',
    //         '.NET',
    //         'Sharepoint'
    //     )
    // ),
    // 'nhs-choices-media-library' => (object) array(
    //     'slug'      => 'nhs-choices-media-library',
    //     'title'     => 'NHS Choices Media Library',
    //     'text'      =>
    //         '<p>One of the largest pieces of work I was involved in whilst working for NHS Choices was the rebuild of the site&apos;s media library.</p>
    //         <p>As well as being solely responsible for the front-end development, I also had to very quickly familiarise myself with the technical aspects of the new media provider we were switching to. This involved me learning their proprietary markup language, <abbr title="Brightcove Experience Markup Language">BEML</abbr>, and also working with the back-end developers to make best use of their API.</p>',
    //     'url'       => 'www.nhs.uk/video',
    //     'madewith' => (object) array(
    //         'XHTML',
    //         'CSS',
    //         'JavaScript/jQuery',
    //         'BEML',
    //         '.NET',
    //         'Sharepoint'
    //     )
    // ),
    // 'dept-health-summer-campaign' => (object) array(
    //     'slug'      => 'dept-health-summer-campaign',
    //     'title'     => 'Department of Health Summer campaign',
    //     'text'      =>
    //         '<p>Whilst working at NHS Choices, I was often part of the development team on campaign microsites for the Department of Health.</p>
    //         <p>This was a simple one-page site to encourage users to sign up for healthy living emails. Campaign sites were built using the same basic front-end framework, however during the development of this site, I made several accessibility improvements and streamlined some of the markup which not only provided benefits for this site, but also for future sites using the framework.</p>',
    //     'url'       => 'www.nhs.uk/summer',
    //     'madewith' => (object) array(
    //         'XHTML',
    //         'CSS',
    //         '.NET',
    //         'Sharepoint'
    //     )
    // ),
    // 'marshalls-tree-surgeons' => (object) array(
    //     'slug'      => 'marshalls-tree-surgeons',
    //     'title'     => 'Marshalls Tree Surgeons',
    //     'text'      =>
    //         '<p>During a short time working with Bedrock Digital, I worked on several small brochure sites for <abbr title="Small and medium enterprises">SMEs</abbr>, including Marshalls Tree Surgeons.</p>
    //         <p>Working closely with the client throughout, I was responsible for the requirement gathering, prototyping, designing, building and testing of the site, as well as integrating an existing dynamic news feature and basic <abbr title="Content Management System">CMS</abbr>.</p>',
    //     'url'       => 'www.marshallstreesurgeons.co.uk',
    //     'madewith' => (object) array(
    //         'XHTML',
    //         'CSS',
    //         'PHP',
    //         'MySQL',
    //         'Photoshop'
    //     )
    // ),
    // 'nucleus-change' => (object) array(
    //     'slug'      => 'nucleus-change',
    //     'title'     => 'Nucleus Human Change Technologies',
    //     'text'      =>
    //         '<p>Nucleus Human Change Technologies approached me to help them design and build the website arm of a new branding campaign they were launching.</p>
    //         <p>The aim was to create a simple brochure site which would give an overview of the services they offer, as well as offering scope for expansion in the future.</p><p>They were keen to make the site as clean and fresh looking as possible, incorporating imagery and branding which was being used on their printed literature. The site also included multi-media elements in the form of an audio clip from one of their relaxation CD&#8217;s and a video excerpt from one of their presentations.</p>',
    //     'url'       => 'www.heyhudson.com/nucleuschange',
    //     'madewith' => (object) array(
    //         'XHTML',
    //         'CSS',
    //         'JavaScript',
    //         'PHP',
    //         'Photoshop',
    //         'Illustrator'
    //     )
    // )
);

?>