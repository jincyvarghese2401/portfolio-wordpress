<?php
/**
 * Front page — Jincy Varghese portfolio.
 * Content for skills, experience and projects is kept in the arrays below
 * so it is easy to update without touching the markup.
 */

$skills = array(
    array('badge' => 'Ph',  'name' => 'PHP',               'desc' => 'Backend Development'),
    array('badge' => 'Lv',  'name' => 'Laravel',           'desc' => 'Web Applications & APIs'),
    array('badge' => 'CI',  'name' => 'CodeIgniter',       'desc' => 'PHP Framework'),
    array('badge' => '.N',  'name' => 'ASP.NET Core',      'desc' => 'MVC & Web Applications'),
    array('badge' => 'C#',  'name' => 'C#',                'desc' => '.NET Development'),
    array('badge' => 'Js',  'name' => 'JavaScript',        'desc' => 'jQuery & AJAX'),
    array('badge' => 'Re',  'name' => 'React',             'desc' => 'Frontend Development'),
    array('badge' => 'H5',  'name' => 'HTML5 & CSS3',      'desc' => 'Bootstrap & Responsive UI'),
    array('badge' => 'Sq',  'name' => 'MySQL',             'desc' => 'Database & Optimization'),
    array('badge' => 'Ms',  'name' => 'MSSQL',             'desc' => 'Microsoft SQL Server'),
    array('badge' => 'Mg',  'name' => 'MongoDB',           'desc' => 'NoSQL Database'),
    array('badge' => 'Api', 'name' => 'REST API',          'desc' => 'API Development & Integration'),
    array('badge' => 'Jw',  'name' => 'JWT Auth',          'desc' => 'API Security'),
    array('badge' => 'Wp',  'name' => 'WordPress',         'desc' => 'CMS & Theme Development'),
    array('badge' => 'Dk',  'name' => 'Docker',            'desc' => 'Containerized Deployment'),
    array('badge' => 'Gt',  'name' => 'Git',               'desc' => 'Version Control'),
);

$extra_skills = array(
    'MVC Architecture', 'ADO.NET', 'Payment Gateway Integration', 'AWS S3',
    'Third-party API Integration', 'Database Optimization', 'Jira & Agile',
    'CRM Software', 'LAMP & Windows Servers', 'Debugging & Performance',
    'AI Tools (Copilot, Cursor, Claude)',
);

$experience = array(
    array(
        'role'    => 'Software Engineer',
        'company' => 'Direct Axis Technology',
        'place'   => 'Dubai, UAE',
        'period'  => 'Nov 2022 – Jul 2026',
        'points'  => array(
            'Developed and maintained ERP, HRMS, DMS and accounting applications using PHP Laravel.',
            'Designed RESTful APIs with JWT-based authentication and secure access control.',
            'Integrated payment gateways and third-party APIs; optimized database queries and performance.',
            'Conducted code reviews, used Jira for sprint planning and Docker for consistent deployments.',
        ),
    ),
    array(
        'role'    => 'Software Engineer',
        'company' => 'Techmaven IT Solutions',
        'place'   => 'Kochi, India',
        'period'  => 'Oct 2019 – Oct 2022',
        'points'  => array(
            'Built dynamic web applications using PHP, JavaScript and MySQL.',
            'Created APIs and web services for mobile and web platforms.',
            'Worked with clients on user stories, requirements and feature enhancements.',
        ),
    ),
    array(
        'role'    => 'Junior PHP Developer',
        'company' => 'ENS Consultancy Services',
        'place'   => 'Kochi, India',
        'period'  => 'Dec 2018 – Sep 2019',
        'points'  => array(
            'Supported development and maintenance of web applications.',
            'Assisted with backend development, database management and debugging.',
        ),
    ),
);

$projects = array(
    array(
        'id'       => 'axispro',
        'category' => 'ERP / Enterprise',
        'title'    => 'Axis Pro ERP Software',
        'summary'  => 'Cloud-based ERP for Amer, Tasheel, Tadbeer, typing and government transaction centers.',
        'about'    => 'A cloud-based ERP system designed for Amer Centers, Tasheel, Tadbeer, Typing Centers and other government transaction centers, helping organizations automate business processes and improve operational efficiency.',
        'points'   => array(
            'Developed and maintained ERP modules using PHP Laravel',
            'Designed and implemented RESTful APIs for enterprise functionalities',
            'Worked on database management and performance optimization',
            'Built backend functionality for business process automation',
            'Worked with stakeholders on requirements and enhancements, tracked in Jira',
        ),
        'tech'     => array('PHP', 'Laravel', 'MySQL', 'REST API', 'Jira'),
        'role'     => 'Software Engineer — Direct Axis Technology',
    ),
    array(
        'id'       => 'bizuma',
        'category' => 'E-commerce',
        'title'    => 'Bizuma',
        'summary'  => 'UK-based online trading and shopping platform with marketplace integrations.',
        'about'    => 'A UK-based online trading and shopping platform, integrated with major online marketplaces for product and order management.',
        'points'   => array(
            'Developed a shipping management module with automated shipping availability checks',
            'Implemented shipping charge calculation and product search',
            'Integrated Amazon, eBay and Shopify APIs for product and order management',
        ),
        'tech'     => array('PHP', 'MySQL', 'JavaScript', 'Marketplace APIs'),
        'role'     => 'Backend Developer',
    ),
    array(
        'id'       => 'bukkawaste',
        'category' => 'Mobile Backend / API',
        'title'    => 'Bukkawaste',
        'summary'  => 'UK-based waste collection management app with APIs for Android and iOS.',
        'about'    => 'A UK-based waste collection management application, with Android and iOS apps powered by a shared backend and REST APIs.',
        'points'   => array(
            'Developed RESTful APIs for the Android and iOS applications',
            'Implemented backend logic for managing waste collection requests',
            'Supported mobile app integration and data synchronization',
        ),
        'tech'     => array('PHP', 'REST API', 'MySQL', 'Mobile Integration'),
        'role'     => 'Backend / API Developer',
    ),
    array(
        'id'       => 'accounting',
        'category' => 'ASP.NET / C#',
        'title'    => 'Mini Accounting System',
        'summary'  => 'Accounting application built with ASP.NET MVC, ADO.NET and SQL Server.',
        'about'    => 'A personal project to build a small accounting system on the Microsoft stack, following a layered architecture.',
        'points'   => array(
            'Built with ASP.NET MVC and C# using a layered architecture',
            'Database connectivity with ADO.NET and Microsoft SQL Server',
            'CRUD operations for accounting records',
        ),
        'tech'     => array('C#', 'ASP.NET MVC', 'ADO.NET', 'MSSQL'),
        'role'     => 'Personal Project',
    ),
    array(
        'id'       => 'easycart',
        'category' => 'React Project',
        'title'    => 'EasyCart',
        'summary'  => 'A simple e-commerce app built with React, Vite and the Fake Store API.',
        'about'    => 'A simple e-commerce application built with React and Vite, using the Fake Store API for product data.',
        'points'   => array(
            'Product browsing and category filtering',
            'Cart management (add, update and remove items)',
            'Cart saved in local storage so it persists between visits',
        ),
        'tech'     => array('React', 'Vite', 'JavaScript', 'REST API'),
        'role'     => 'Personal Project',
    ),
    array(
        'id'       => 'hotel',
        'category' => 'PHP / Laravel',
        'title'    => 'Hotel Management System',
        'summary'  => 'A Laravel application for managing hotel information and operations.',
        'about'    => 'A hotel management application developed using PHP and Laravel for managing hotel-related information and day-to-day operations.',
        'points'   => array(
            'Built on the Laravel MVC framework',
            'Management of hotel-related information and operations',
            'MySQL database backend',
        ),
        'tech'     => array('PHP', 'Laravel', 'MySQL'),
        'role'     => 'Personal Project',
    ),
);

get_header();
?>

<main id="main">

<!-- ================= Hero ================= -->
<section class="hero" id="home">
    <div class="hero-bg" aria-hidden="true"></div>

    <div class="container hero-inner">

        <div class="hero-content">

            <span class="availability">
                <span class="dot"></span> Available for new opportunities
            </span>

            <p class="hero-small-text">Hello, I'm</p>

            <h1>Jincy Varghese</h1>

            <h2>PHP <span class="accent">Laravel</span> &amp; Web Developer</h2>

            <p class="hero-description">
                I design and build scalable web applications, ERP, HRMS and
                enterprise solutions using PHP, Laravel, ASP.NET Core, REST APIs
                and modern web technologies.
            </p>

            <div class="hero-buttons">
                <a href="#projects" class="btn primary-btn">
                    View Projects
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                </a>
                <a href="#contact" class="btn secondary-btn">Contact Me</a>
            </div>

            <ul class="hero-stats">
                <li><strong>7+</strong><span>Years experience</span></li>
                <li><strong>3</strong><span>Companies</span></li>
                <li><strong>UAE</strong><span>Based in Dubai</span></li>
            </ul>

        </div>

        <div class="hero-visual" aria-hidden="true">
            <div class="code-card">
                <div class="code-card-bar">
                    <span></span><span></span><span></span>
                    <em>Developer.php</em>
                </div>
<pre><code><span class="c-k">class</span> <span class="c-t">Developer</span>
{
    <span class="c-k">public</span> <span class="c-v">$name</span> = <span class="c-s">'Jincy Varghese'</span>;
    <span class="c-k">public</span> <span class="c-v">$role</span> = <span class="c-s">'Web Developer'</span>;
    <span class="c-k">public</span> <span class="c-v">$location</span> = <span class="c-s">'Dubai, UAE'</span>;

    <span class="c-k">public function</span> <span class="c-f">stack</span>(): <span class="c-t">array</span>
    {
        <span class="c-k">return</span> [
            <span class="c-s">'PHP'</span>, <span class="c-s">'Laravel'</span>, <span class="c-s">'ASP.NET Core'</span>,
            <span class="c-s">'MySQL'</span>, <span class="c-s">'MSSQL'</span>, <span class="c-s">'MongoDB'</span>,
            <span class="c-s">'JavaScript'</span>, <span class="c-s">'React'</span>,
        ];
    }
}</code></pre>
            </div>
            <div class="floating-badge badge-one">
                <strong>REST APIs</strong><span>JWT secured</span>
            </div>
            <div class="floating-badge badge-two">
                <strong>ERP &amp; HRMS</strong><span>Business solutions</span>
            </div>
        </div>

    </div>
</section>

<!-- ================= About ================= -->
<section id="about" class="section about-section">
    <div class="container">

        <div class="section-heading reveal">
            <p>About Me</p>
            <h2>Who I Am</h2>
        </div>

        <div class="about-content">

            <div class="about-text reveal">
                <p class="lead">
                    A Web Developer with 7+ years of experience designing, developing
                    and maintaining scalable web applications and enterprise software.
                </p>
                <p>
                    I have built ERP, HRMS, DMS, accounting and e-commerce solutions using
                    PHP, Laravel, CodeIgniter, RESTful APIs, MySQL and JavaScript, including
                    JWT-based authentication, payment gateway integrations and cloud services
                    such as AWS S3.
                </p>
                <p>
                    I also have working knowledge of C#, ASP.NET Core and Microsoft SQL Server,
                    and I am growing my React skills. I focus on backend development, API
                    architecture, database optimization and application performance.
                </p>
            </div>

            <div class="about-details reveal">

                <div class="detail-item">
                    <span class="detail-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                    </span>
                    <div>
                        <strong>Experience</strong>
                        <span>7+ Years</span>
                    </div>
                </div>

                <div class="detail-item">
                    <span class="detail-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.1-7-11a7 7 0 0 1 14 0c0 4.9-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                    </span>
                    <div>
                        <strong>Location</strong>
                        <span>Dubai, UAE</span>
                    </div>
                </div>

                <div class="detail-item">
                    <span class="detail-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg>
                    </span>
                    <div>
                        <strong>Specialization</strong>
                        <span>PHP, Laravel &amp; APIs</span>
                    </div>
                </div>

                <div class="detail-item">
                    <span class="detail-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c3 2 9 2 12 0v-5"/></svg>
                    </span>
                    <div>
                        <strong>Education</strong>
                        <span>B.Tech, Computer Science</span>
                    </div>
                </div>

                <div class="detail-item">
                    <span class="detail-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 5h9M8.5 3v2M6 5c0 4 3 7 6 8M11 5c0 4-3 7-6 9"/><path d="M13 21l4-9 4 9M14.5 18h5"/></svg>
                    </span>
                    <div>
                        <strong>Languages</strong>
                        <span>English, Malayalam</span>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- ================= Skills ================= -->
<section id="skills" class="section skills-section">
    <div class="container">

        <div class="section-heading reveal">
            <p>My Skills</p>
            <h2>Technologies I Work With</h2>
        </div>

        <div class="skills-grid">
            <?php foreach ($skills as $skill) : ?>
                <div class="skill-card reveal">
                    <span class="skill-badge"><?php echo esc_html($skill['badge']); ?></span>
                    <h3><?php echo esc_html($skill['name']); ?></h3>
                    <p><?php echo esc_html($skill['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="extra-skills reveal">
            <h3>Also experienced with</h3>
            <ul>
                <?php foreach ($extra_skills as $item) : ?>
                    <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</section>

<!-- ================= Experience ================= -->
<section id="experience" class="section experience-section">
    <div class="container">

        <div class="section-heading reveal">
            <p>Career</p>
            <h2>Work Experience</h2>
        </div>

        <div class="timeline">
            <?php foreach ($experience as $job) : ?>
                <article class="timeline-item reveal">
                    <span class="timeline-dot" aria-hidden="true"></span>
                    <div class="timeline-card">
                        <div class="timeline-head">
                            <div>
                                <h3><?php echo esc_html($job['role']); ?></h3>
                                <p class="timeline-company">
                                    <?php echo esc_html($job['company']); ?>
                                    <span>&middot; <?php echo esc_html($job['place']); ?></span>
                                </p>
                            </div>
                            <span class="timeline-period"><?php echo esc_html($job['period']); ?></span>
                        </div>
                        <ul>
                            <?php foreach ($job['points'] as $point) : ?>
                                <li><?php echo esc_html($point); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="education-card reveal">
            <span class="detail-icon" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10L12 5 2 10l10 5 10-5z"/><path d="M6 12v5c3 2 9 2 12 0v-5"/></svg>
            </span>
            <div>
                <p class="education-label">Education</p>
                <h3>B.Tech in Computer Science &amp; Engineering</h3>
                <p>UKF College of Engineering &amp; Technology, Kollam, Kerala &middot; 2014</p>
            </div>
        </div>

    </div>
</section>

<!-- ================= Projects ================= -->
<section id="projects" class="section projects-section">
    <div class="container">

        <div class="section-heading reveal">
            <p>My Work</p>
            <h2>Projects</h2>
        </div>

        <div class="projects-grid">
            <?php foreach ($projects as $i => $project) : ?>
                <article class="project-card reveal">
                    <div class="project-thumb thumb-<?php echo esc_attr($i + 1); ?>">
                        <span class="project-number"><?php echo esc_html(sprintf('%02d', $i + 1)); ?></span>
                    </div>
                    <div class="project-content">
                        <span class="project-category"><?php echo esc_html($project['category']); ?></span>
                        <h3><?php echo esc_html($project['title']); ?></h3>
                        <p><?php echo esc_html($project['summary']); ?></p>
                        <div class="project-tech">
                            <?php foreach ($project['tech'] as $tech) : ?>
                                <span><?php echo esc_html($tech); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <button type="button" class="project-link" data-project="<?php echo esc_attr($project['id']); ?>" aria-haspopup="dialog">
                            View Details <span aria-hidden="true">&rarr;</span>
                        </button>
                    </div>

                    <!-- Details shown in the popup -->
                    <template id="project-<?php echo esc_attr($project['id']); ?>">
                        <div class="modal-thumb thumb-<?php echo esc_attr($i + 1); ?>">
                            <span class="project-category"><?php echo esc_html($project['category']); ?></span>
                            <h3 id="modalTitle"><?php echo esc_html($project['title']); ?></h3>
                        </div>
                        <div class="modal-body">
                            <p class="modal-about"><?php echo esc_html($project['about']); ?></p>
                            <h4>Key Contributions</h4>
                            <ul class="modal-points">
                                <?php foreach ($project['points'] as $point) : ?>
                                    <li><?php echo esc_html($point); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="modal-meta">
                                <div>
                                    <h4>Technologies</h4>
                                    <div class="project-tech">
                                        <?php foreach ($project['tech'] as $tech) : ?>
                                            <span><?php echo esc_html($tech); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div>
                                    <h4>Role</h4>
                                    <p><?php echo esc_html($project['role']); ?></p>
                                </div>
                            </div>
                        </div>
                    </template>
                </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Project details popup -->
<div class="modal" id="projectModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle" hidden>
    <div class="modal-backdrop" data-close></div>
    <div class="modal-dialog">
        <button type="button" class="modal-close" data-close aria-label="Close details">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18"/></svg>
        </button>
        <div class="modal-content" id="modalContent"></div>
    </div>
</div>

<!-- ================= Contact ================= -->
<section id="contact" class="section contact-section">
    <div class="container">

        <div class="contact-panel reveal">

            <div class="section-heading">
                <p>Get In Touch</p>
                <h2>Contact Me</h2>
            </div>

            <div class="contact-content">
                <p>
                    I'm open to Full-Stack and PHP Laravel developer opportunities,
                    WordPress projects and web development work.
                </p>

                <div class="contact-links">
                    <a href="mailto:jincyvarghese9162@gmail.com" class="contact-primary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
                        Email Me
                    </a>
                    <a href="tel:+971542864215">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg>
                        +971 54 286 4215
                    </a>
                    <a href="https://www.linkedin.com/in/jincy-varghese-765a761bb" target="_blank" rel="noopener">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                        LinkedIn
                    </a>
                    <a href="https://github.com/jincyvarghese2401/" target="_blank" rel="noopener">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg>
                        GitHub
                    </a>
                </div>

                <p class="contact-email">jincyvarghese9162@gmail.com</p>
            </div>

        </div>

    </div>
</section>

</main>

<?php get_footer(); ?>
