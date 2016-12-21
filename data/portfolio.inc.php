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
    'lastfm' => (object) array(
        'slug'      => 'lastfm',
        'title'     => 'Last.fm',
        'client'    => 'Personal project',
        'text'      => 'Making use of the <a href="http://www.last.fm/" target="_blank">Last.fm<span class="visuallyhidden"> (opens in a new window)</span></a> API, this tool simply provides a real-time display of a users\' most recently played tracks, or their top artists of all time, based on track plays. This data is then displayed as thumbnails, which click through to the relevant track/artist page on the Last.fm website.',
        'url'       => 'lastfm.heyhudson.com',
        'github'    => 'lastfm',
        'madewith'  => (object) array(
            'XHTML',
            'CSS',
            'JavaScript/jQuery',
            'Last.fm API'
        )
    ),
    'gov-petitions' => (object) array(
        'slug'      => 'gov-petitions',
        'title'     => 'UK Government Petitions',
        'client'    => 'Personal project',
        'text'      => 'An experiment using the publicly-accessible government petitions API. Petitions are searchable by ID, data is returned to the browser and displayed using the KnockoutJS framework. The API is polled periodically to give a real-time update of the number of signatories.',
        'url'       => 'govpetitions.heyhudson.com',
        'github'    => 'gov-petitions',
        'madewith'  => (object) array(
            'XHTML',
            'CSS',
            'JavaScript/jQuery',
            'KnockoutJS',
            'Government API'
        )
    ),
    'steve-bloomers-watching' => (object) array(
        'slug'      => 'steve-bloomers-watching',
        'title'     => 'Steve Bloomer\'s Watching',
        'client'    => 'Personal project',
        'text'      => 'As a season ticket holder at Derby County FC (for my sins!), I decided to create a blog in which to write match reports and articles on the club. The blog uses the basic WordPress engine which has been ripped out and integrated into a custom <abbr title="Hypertext Markup Language">HTML</abbr>5 template. The site also makes use of <abbr title="Cascading Style Sheets">CSS</abbr> media queries to enable a responsive layout across devices.',
        'url'       => 'www.stevebloomerswatching.com',
        'github'    => '',
        'madewith'  => (object) array(
            'XHTML',
            'CSS',
            'JavaScript/jQuery',
            'WordPress',
            'Photoshop'
        )
    ),
    'nhs-choices' => (object) array(
        'slug'      => 'nhs-choices',
        'title'     => 'NHS Choices',
        'client'    => 'Capita',
        'text'      =>
            'Working on one of the largest websites in Europe, it was my responsibility to create front-end code to the highest standards and then liaise with the back-end developers to ensure it was integrated properly into the solution.</p><p>As a public health information site, accessibility was at the forefront of everything we did, and as such my knowledge of progressive enhancement & graceful degradation, assistive technologies and cross-browser compatibility was increased hugely, helped in no small part by regular contact with third parties, such as the <a href="http://www.rnib.org.uk/" target="_blank">R.N.I.B<span class="visuallyhidden"> (Link opens in a new window)</span></a> and <a href="https://www.abilitynet.org.uk/" target="_blank">AbilityNet<span class="visuallyhidden"> (Link opens in a new window)</span></a>.',
        'url'       => 'www.nhs.uk',
        'madewith'  => (object) array(
            'XHTML',
            'CSS',
            'JavaScript/jQuery',
            'Sharepoint',
            '.NET'
        )
    ),
    'nhs-choices-pims' => (object) array(
        'slug'      => 'nhs-choices-pims',
        'title'     => 'NHS Choices Provider Information Management System',
        'client'    => 'Capita',
        'text'      =>
            'NHS Choices provided healthcare organisations (such as dentists, GPs and clinics) with an internal <abbr title="Content Management System">CMS</abbr> through which they could update their profile on the NHS website.</p>
            <p>The profiles were built up of customisable modules, allowing organisations to add videos, news articles, registration information, opening times and numerous other details about their service.</p>
            <p>Making heavy use of JavaScript and jQuery, it was a constantly evolving system which required regular updates and refinement in response to the needs of the organisations.',
        'url'       => 'www.nhs.uk/Services/gp/Overview/DefaultView.aspx?id=39571',
        'madewith' => (object) array(
            'XHTML',
            'CSS',
            'JavaScript/jQuery',
            '.NET',
            'Sharepoint'
        )
    ),
    'nhs-choices-media-library' => (object) array(
        'slug'      => 'nhs-choices-media-library',
        'title'     => 'NHS Choices Media Library',
        'client'    => 'Capita',
        'text'      =>
            'One of the largest pieces of work I was involved in whilst working for NHS Choices was the rebuild of the site&apos;s media library.</p>
            <p>As well as being solely responsible for the front-end development, I also had to very quickly familiarise myself with the technical aspects of the <a href="https://www.brightcove.com">new media provider</a> we were switching to. This involved me learning their proprietary markup language, <abbr title="Brightcove Experience Markup Language">BEML</abbr>, and also working with the back-end developers to make best use of their API.',
        'url'       => 'www.nhs.uk/video',
        'madewith' => (object) array(
            'XHTML',
            'CSS',
            'JavaScript/jQuery',
            'BEML',
            '.NET',
            'Sharepoint'
        )
    ),
    'dept-health-summer-campaign' => (object) array(
        'slug'      => 'dept-health-summer-campaign',
        'title'     => 'Department of Health Summer campaign',
        'client'    => 'Capita',
        'text'      =>
            'Whilst working at NHS Choices, I was often part of the development team on campaign microsites for the Department of Health.</p>
            <p>This was a simple one-page site to encourage users to sign up for healthy living emails. Campaign sites were built using the same basic front-end framework, however during the development of this site, I made several accessibility improvements and streamlined some of the markup which not only provided benefits for this site, but also for future sites using the framework.',
        'url'       => 'www.nhs.uk/summer',
        'madewith' => (object) array(
            'XHTML',
            'CSS',
            '.NET',
            'Sharepoint'
        )
    ),
    'marshalls-tree-surgeons' => (object) array(
        'slug'      => 'marshalls-tree-surgeons',
        'title'     => 'Marshalls Tree Surgeons',
        'client'    => 'Bedrock Digital',
        'text'      =>
            'During a short time working with Bedrock Digital, I worked on several small brochure sites for <abbr title="Small and medium enterprises">SMEs</abbr>, including Marshalls Tree Surgeons.</p>
            <p>Working closely with the client throughout, I was responsible for the requirement gathering, prototyping, designing, building and testing of the site, as well as integrating an existing dynamic news feature and basic <abbr title="Content Management System">CMS</abbr>.',
        'url'       => 'www.marshallstreesurgeons.co.uk',
        'madewith' => (object) array(
            'XHTML',
            'CSS',
            'PHP',
            'MySQL',
            'Photoshop'
        )
    ),
    'nucleus-change' => (object) array(
        'slug'      => 'nucleus-change',
        'title'     => 'Nucleus Human Change Technologies',
        'client'    => 'Personal project',
        'text'      =>
            'Nucleus Human Change Technologies approached me to help them design and build the website arm of a new branding campaign they were launching.</p>
            <p>The aim was to create a simple brochure site which would give an overview of the services they offer, as well as offering scope for expansion in the future.</p><p>They were keen to make the site as clean and fresh looking as possible, incorporating imagery and branding which was being used on their printed literature. The site also included multi-media elements in the form of an audio clip from one of their relaxation CD&#8217;s and a video excerpt from one of their presentations.',
        'url'       => 'www.heyhudson.com/nucleuschange',
        'madewith' => (object) array(
            'XHTML',
            'CSS',
            'JavaScript',
            'PHP',
            'Photoshop',
            'Illustrator'
        )
    )
);

?>
