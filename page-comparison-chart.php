<?php
/*
* Template Name: Page Comparison
* Description: Template for Comparison Chart
*/
?>
<?php get_header(); ?>

<div class="custom-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <section class="comparison-table1">
                    <table id="comp1" class="table  table-striped">
                        <tr>
                            <th class="no-border"></th>
                            <th class="no-border table-icon">
                                <?php $imgUrl = get_template_directory_uri() .'/img/selenium.png';
                        echo "<img src='$imgUrl' alt='selenium-icon'/>"; ?> </th>

                            <th class="no-border comp1-icon">
                                <?php $imgUrl = get_template_directory_uri() .'/img/test-complete.png';
                        echo "<img src='$imgUrl' alt='test-complete-icon'/>"; ?></th>
                            <th class="no-border comp1-icon">
                                <?php $imgUrl = get_template_directory_uri() .'/img/ranorex.png';
                        echo "<img src='$imgUrl' alt='ranorex-icon'/>"; ?></th>
                            <th class="no-border comp1-icon">
                                <?php $imgUrl = get_template_directory_uri() .'/img/test-cafe.png';
                        echo "<img src='$imgUrl' alt='test-cafe-icon'/>"; ?></th>
                            <th class="no-border comp1-icon">
                                <?php $imgUrl = get_template_directory_uri() .'/img/hp.png';
                        echo "<img src='$imgUrl' alt='hp-icon'/>"; ?></th>
                            <th class="no-border comp1-icon">
                                <?php $imgUrl = get_template_directory_uri() .'/img/ibm.png';
                        echo "<img src='$imgUrl' alt='ibm-icon'/>"; ?></th>
                            <th class="no-border comp1-icon">
                                <?php $imgUrl = get_template_directory_uri() .'/img/boozang.png';
                        echo "<img src='$imgUrl' alt='boozang-icon'/>"; ?></th>
                        </tr>
                        <tr>
                            <th>Product</th>
                            <td>Selenium</td>
                            <td>TestComplete</td>
                            <td>Ranorex</td>
                            <td>TestCafe</td>
                            <td>QTP/UTF</td>
                            <td>Rational<br> Function Tester</td>
                            <td>Boozang</td>
                        </tr>
                        <tr>
                            <th>Pricing/year</th>
                            <td>Free</td>
                            <td>$$$</td>
                            <td>$$$</td>
                            <td>$</td>
                            <td>$$$</td>
                            <td>Not available</td>
                            <td>$$</td>
                        </tr>
                        <tr>
                            <th>Platforms</th>
                            <td>All</td>
                            <td>Windows</td>
                            <td>Windows</td>
                            <td>Windows/<br>Mac/Linux</td>
                            <td>Windows/Mac</td>
                            <td>Windows</td>
                            <td>All Platforms</td>
                        </tr>
                        <tr>
                            <th>Record/Replay</th>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <th>Data-driven<br>Testing</th>
                            <td><i class="fa fa-code orange" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-code orange" aria-hidden="true"></i></td>
                            <td><i class="fa fa-code orange" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <th>Assertions</th>
                            <td><i class="fa fa-code orange" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-code orange" aria-hidden="true"></i></td>
                            <td><i class="fa fa-code orange" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <th>Logic Trees</th>
                            <td><i class="fa fa-code orange" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-code orange" aria-hidden="true"></i></td>
                            <td><i class="fa fa-code orange" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        </tr>

                        <tr>
                            <th>API Testing</th>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <th>Generate API tests from UI tests</th>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <th>Cucumber / BDD</th>
                            <td><i class="fa fa-times orange" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times orange" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <th>Dependency Maps</th>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <th>Autogeneration of test documentation</th>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <th>Collaboration<br>and user roles</th>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td>Collaborator<br>license required</td>
                            <td>Ranorex remote<br>required</td>
                            <td><i class="fa fa-times red" aria-hidden="true"></i></td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <td>IBM Team<br>Concert required</td>
                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        </tr>
                    </table>
                </section>

                <section class="comparison-table2">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">

                            <table id="comp2" class="table  table-striped">
                                <tr>
                                    <th class="no-border"></th>
                                    <th class="no-border comp2-icon">
                                        <?php $imgUrl = get_template_directory_uri() .'/img/boozang.png';
                            echo "<img src='$imgUrl' alt='boozang-icon'/>"; ?></th>
                                </tr>
                                <tr>
                                    <th>Product</th>
                                    <td>Boozang</td>
                                </tr>
                                <tr>
                                    <th>Pricing/year</th>
                                    <td>$$</td>
                                </tr>
                                <tr>
                                    <th>Platforms</th>
                                    <td>All Platforms</td>
                                </tr>
                                <tr>
                                    <th>Record/Replay</th>
                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <th>Data-driven<br>Testing</th>
                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <th>Assertions</th>
                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <th>Logic Trees</th>
                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <th>API Testing</th>
                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <th>Generate API tests from UI tests</th>
                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <th>Cucumber / BDD</th>
                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <th>Dependency Maps</th>
                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <th>Autogeneration of test documentation</th>
                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                </tr>
                                <tr>
                                    <th>Collaboration<br>and user roles</th>
                                    <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>

                <section class="comparison-chart-exp">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 page-main">
                            <div class="col-md-4">
                                <h4><i class="fa fa-times red" aria-hidden="true"></i> - Not Supported</h4>
                            </div>
                            <div class="col-md-4">
                                <h4><i class="fa fa-code orange" aria-hidden="true"></i> - Requires Coding</h4>
                            </div>
                            <div class="col-md-4">
                                <h4><i class="fa fa-check" aria-hidden="true"></i> - Supported out of the box</h4>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>


</div><!-- /.custom-container -->

<?php get_footer(); ?>