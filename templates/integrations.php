<?php
// integrations layout for Front Page Block
?>
<!-- mytabs1-->
<section class="mytabs1">
    <div class="container">
        <div class="tab-wrapper">
            <nav>
                <a href="#tab-1" class="nav-tab active">First</a>
                <a href="#tab-2" class="nav-tab">Second</a>
                <a href="#tab-3" class="nav-tab">Third</a>
            </nav>
            <hr />
            <section id="tab-1" class="tab-content active">
                <P>Some content here.</P>
            </section>
            <section id="tab-2" class="tab-content">
                <p>Some more here.</p>
            </section>
            <section id="tab-3" class="tab-content">
                <p>Something else here.</p>
            </section>
        </div>

        <!-- <div class="nav-tab-wrapper">
            <div class="">
                <a href="#tab-1" class="nav-tab active">First</a>
                <a href="#tab-2" class="nav-tab">Second</a>
                <a href="#tab-3" class="nav-tab">Third</a>
            </div>

            <div id="tab-1" class="tab-content active">
                <P>First content here.</P>
            </div>
            <div id="tab-2" class="tab-content">
                <p>Second content here.</p>
            </div>
            <div id="tab-3" class="tab-content">
                <p>Third content here.</p>
            </div>
        </div> -->
    </div>
</section>


<!-- tabs2 -->
<section class="mytabs2">
    <div class="container">
        <ul class="tabs">
            <li class="tab-link active" data_tab="tab_1">Tab One</li>
            <li class="tab-link" data_tab="tab_2">Tab Two</li>
            <li class="tab-link" data_tab="tab_3">Tab Three</li>
        </ul>

        <div id="tab_1" class="tab-content active">
            <img class="feat_img" src="https://localhost/Boozang/wp-content/uploads/2020/06/ide-style.png"
                alt="IDE-style interface">
        </div>
        <div id="tab_2" class="tab-content">
            <img class="feat_img" src="https://localhost/Boozang/wp-content/uploads/2020/05/map-view.png"
                alt="Map view">
        </div>
        <div id="tab_3" class="tab-content">
            <img class="feat_img" src="https://localhost/Boozang/wp-content/uploads/2020/05/cucumber-built-in.png"
                alt="Cucumber support built-in">
        </div>
    </div><!-- container -->
</section>





<!-- about -->
<!-- two_columns_section -->
<section class="two_columns_section presentation section_spacing_top_small lightgrey">
    <div class="container">
        <div class="column_row">
            <!-- loopa flex content -->
            <div class="part image">
                <img src="https://localhost/Boozang/wp-content/uploads/2018/10/robot-medium-tran2.png" alt="Map view">
            </div>
            <div class="part text">
                <h3>Boozang is... </h3>
                <p>Boozang is a web test automation tool that tests
                    your application flows end-to-end.
                    Boozang takes a modern approach to test automation,
                    using the built-in test capabilities of the web
                    browser instead of relying on APIs such as Selenium.
                    It’s part of the code-less revolution, but we prefer the
                    term low-code, or code optional, as you can incorporate
                    code when needed.
                </p>
            </div>
        </div>
</section>


<!-- story -->
<!-- two_columns_section -->
<section class="two_columns_section story section_spacing_top_medium lightgrey">
    <div class="header">
        <h3>How Boozang works</h3>
        <p>Something here...</p>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="column_row">
                    <!-- loopa flex content -->
                    <div class="part text">
                        <h5>Create Test Steps

                        </h5>
                        <p>Create highly re-usable test steps using our
                            low-code tool.
                            Engage the whole team: Testers
                            can do most of the work using record-replay and
                            our powerful element selectors powered by AI.
                            Developers can build on this adding Javascript
                            code to unlock advanced functionality.
                        </p>
                    </div>
                    <div class="part image">
                        <img src="https://localhost/Boozang/wp-content/uploads/2021/03/create_test_steps.png"
                            alt="Map view">
                    </div>
                </div>

                <div class="column_row">
                    <!-- loopa flex content -->
                    <div class="part image">
                        <img src="https://localhost/Boozang/wp-content/uploads/2021/03/analyze_root_causes.png"
                            alt="Map view">
                    </div>
                    <div class="part text">
                        <h5>Synchonize features files
                        </h5>
                        <p>Synchronize Cucumber features files from
                            your favourite versioning system.
                            Link the Cucumber test steps to the test code,
                            and build comprehensive test maps.
                            Developers can build on this adding Javascript
                            code to unlock advanced functionality.
                        </p>
                    </div>
                </div>
                <div class="column_row">
                    <!-- loopa flex content -->
                    <div class="part text">
                        <h5>Integrate to CI server
                        </h5>
                        <p>Use your favourite CI server to run your tests.
                            Boozang builds it’s Open source test runner on
                            Puppeteer and Playwright, so this can be modified
                            to your needs.
                            Boozang produces Cucumber reports, which can
                            be displayed in any CI server.
                        </p>
                    </div>
                    <div class="part image">
                        <img src="https://localhost/Boozang/wp-content/uploads/2021/03/integrate.png" alt="Map view">
                    </div>
                </div>


                <div class="column_row">
                    <!-- loopa flex content -->
                    <div class="part image">
                        <img src="https://localhost/Boozang/wp-content/uploads/2021/03/Integrate_to_CI_server.png"
                            alt="Map view">
                    </div>
                    <div class="part text">
                        <h5>Analyze root causes and improve
                        </h5>
                        <p>Use our root cause analysis report to find bugs and bottlenecks,
                            and improve team output.
                            Map bugs to your external bug tracking system, and
                            avoid false negatives by classify bugs as automation or application bugs.
                            Increase your feature coverage. Rinse repeat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="integrations_section section_spacing_top_medium">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="text_section">
                    <h2 class="">
                        <?php the_sub_field('heading');?>
                    </h2>
                    <p>
                        <?php the_sub_field('text');?>
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="icon_section">
                    <div class="container">
                        <div class="d-flex flex-wrap justify-content-between">
                            <?php
// check if the repeater field has rows
if (have_rows('icon_box')) {
    while (have_rows('icon_box')) {
        the_row(); ?>
                            <div class="img_box">
                                <span>
                                    <?php $img_id = get_sub_field('icon_image'); ?>
                                    <?php echo wp_get_attachment_image($img_id, 'full'); ?>
                                </span>
                            </div>
                            <?php
    }
}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>