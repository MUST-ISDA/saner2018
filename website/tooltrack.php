<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('./utils/header.php'); ?>
</head>

<body>

    <?php
    require_once('./utils/headerTopBar.php');
    require_once('./utils/navbar.php');
    ?>

    <!-- Breadcrumbs -->
    <?php
    require_once('./utils/breadcrumb.php');
    ?>
    <!-- end Breadcrumbs -->

    <!-- what-we-do -->
    <section id="what-we-do" class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: justify;">
                        The Tool Demonstration track is an important part of the 30th edition of the International Conference on Software Analysis, Evolution, and Reengineering (SANER’23), with the goal of showcasing live presentation of tool prototypes. Tools and their demonstrations are central to research in software maintenance, reverse engineering and reengineering, have a prominent role in the conference, and increase substantially the visibility of the associated research.
                    </p>
                    <br>
                    <p style="text-align: justify;">
                        Tool demonstrations are expected to present tools that implement a research approach. Tools can range from mature prototypes to fully developed products that are being prepared for commercialization. We especially encourage tool demonstration proposals complementing full research papers. Whereas a research paper is intended to give the background information and point out the scientific contribution of a new software engineering approach, the tool demonstration provides a good opportunity to showcase how the scientific approach has been transferred into a running tool prototype. Thus, potential authors of the research papers are encouraged to submit the corresponding tools to this track. Any of the topics covered in the conference are of interest and appropriate for tool demonstrations.
                    </p>
                    <br>
                    <strong>Evaluation Criteria</strong>
                    <p style="text-align: justify; margin-top: 15px;">
                        Each submission will be reviewed by at least three members of the tool demonstration program committee. The committee will review each submission on its merits and quality. <b>Important note: SANER 2023 follows a full double-blind review process.​ For details see the Instructions for Authors. Submissions that do not adhere to these limits or that violate the formatting guidelines will be desk-rejected without review</b>
                    </p>
                    <p style="text-align: justify;">
                        A good tool paper should:
                    <ul>
                        <li>Fall under the topics mentioned for SANER 2023 research track;</li>
                        <li>Present and discuss a tool that has NOT been published before as a tool paper;</li>
                        <li>Motivate the need for the tool;</li>
                        <li>Describe the tool’s novelty and how it relates to previous industrial or research efforts;</li>
                        <li>Describe the tool’s goals, requirements, architecture and explain its inner workings;</li>
                        <li>NOT necessarily contain a large-scale empirical study of the tool, BUT any empirical results or user feedback are highly encouraged;</li>
                        <li>Optionally, include in the abstract the URL of a 3-to-5 minute screencast, either with annotations or voice-over, that provides a concise version of the tool demo scenario. The video should be posted on YouTube (private, not shared) or hosted on the tool’s website.</li>
                    </ul>
                    </p>
                    <br>
                    <strong>Submission Instructions</strong>
                    <p style="text-align: justify; margin-top: 15px;">
                        Submissions of tool demonstrations must:
                    <ul>
                        <li>adhere to the conference proceedings style (<a href="http://www.ieee.org/conferences_events/conferences/publishing/templates.html" target="_blank">IEEE proceedings paper format guidelines</a>.);</li>
                        <li>have a maximum of 5 pages that describe the criteria above;</li>
                        <li>be uploaded electronically in PDF format via the SANER 2023 Easychair submission site.</li>
                    </ul>
                    </p>
                    <p style="text-align: justify;">
                        Accepted tool demonstrations will be allocated 5 pages in the conference proceedings. Demonstrators will be invited to (i) give a presentation that will be scheduled into the conference program, and (ii) have a hands-on session in which SANER attendants can use and experiment with the tools. Commercial products and products that are currently being commercialized, cannot be accepted. The demonstrations are intended to highlight scientific contributions and consequently should not be sales pitches.
                    </p>
                    <br>
                    <strong>Best Tool Demo Award</strong>
                    <p style="text-align: justify; margin-top: 15px;">
                        <strong>The best tool demonstrations will be invited to submit a blog post to the IEEE Software Blog <a href="http://blog.ieeesoftware.org" target="_blank">http://blog.ieeesoftware.org</a>. This dissemination award is a recognition of the SANER community to high quality tools that can impact the research and practice in the areas of software maintenance, reverse engineering and reengineering.</strong> Attendees at the tool demo and hand-on sessions will have the opportunity to rate/rank the best tools by means of a publicly available app. In addition to the tools quality perceived by the SANER attendants, the best tools will be selected based on the following criteria:
                    <ol>
                        <li>Public source code availability</li>
                        <li>Ease of installation and use</li>
                        <li>Mature experimentation/testing</li>
                        <li>Potential and/or current impact</li>
                    </ol>
                    </p>
                    <!--
                    <p style="text-align: justify;">
                        <br>
                        <strong>Important Dates</strong>
                    <ul>
                        <li>Abstract submission deadline: January 5, 2023 AoE</li>
                        <li>Paper submission deadline: January 12, 2023 AoE</li>
                        <li>Notifications: February 16, 2023 AoE</li>
                        <li>Camera Ready: February 22, 2023 AoE</li>
                        <li>Submission Page: <a target="_blank" href="https://easychair.org/conferences/?conf=saner2023">https://easychair.org/conferences/?conf=saner2023</a></li>
                    </ul>
                    </p>
-->
                </div>
            </div>
        </div><!-- end of row -->
    </section>
    <!--
    <section id="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Committee Members</h3>
                    <hr class="lineHr">
                </div>
            </div>
            <?php
            $content = file_get_contents('config/production.json');
            $json = json_decode($content, true);
            ?>
            <div class="row"> <?php
                                foreach ($json['commiteeMembers']['tool_track'] as $key => $value) {
                                ?>
                    <div class="col-md-4">
                        <?php if (!is_null($value['website'])) { ?>
                            <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a><?php if ($value['name'] == 'Mario Linares Vasquez' || $value['name'] == 'Luca Ponzanelli') {
                                                                                                                            echo ' <span style="font-size: 18px;">(co-Chair)</span>';
                                                                                                                        } ?>
                        <?php } else { ?>
                            <a><?php echo $value['name'] ?></a>
                        <?php } ?>
                        <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                        <p><?php echo $value['nation'] ?></p>
                    </div>
                <?php
                                }
                ?>
            </div>
        </div>
    </section>
-->

    <!-- footer -->
    <?php require_once('./utils/footer.php') ?>
    <!-- end footer -->

    <!-- jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.ui.totop.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="js/importantDates.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        jQuery("#layerslider").layerSlider({
            responsive: false,
            responsiveUnder: 1280,
            layersContainer: 1280,
            skin: 'noskin',
            hoverPrevNext: false,
            skinsPath: '../layerslider/skins/'
        });
    </script>

    <script>
        //Animation Wow.js
        new WOW().init();
    </script>

</body>

</html>
