<?php
    $title = 'Meet Our Team | OWASOL TECH.';
    $pageClass  = 'team-page';
    $pageName   = 'team';
    $keywords = 'Oue team works day and night to merge imagination and technology to take your business online. Meet our experts.';
    $description = 'Owasol development, Owasol team, Development team, Website development, software development';
    include('components/header.php');
    include('components/sidebar.php');
?>

    <section class="page-section team" id="team">
        <div class="container-fluid">
            <div class="page-content">
                <p class="owasol-breadcumbs">
                    You are now visiting
                    <a href="index.php">Home</a> /
                    <a href="team.php">Our Team</a>
                </p>
                <h1 class="text-center mb-0 text-white font-weight-bold"><i class="fal fa-users"></i> We're Family - Meet Our Team</h1>
                <p class="text-center text-white text-italic">Individuals can do & make a difference, but it takes a team to
                    really mess things up.</p>
                <div class="row mt-4">
                    <?php
                        include_once('data/team.php');
                        foreach ($team as $key => $member) {
                    ?>
                            <div class="col-md-3 mb-2">
                                <div class="member border">
                                    <div class="profile-img">
                                        <div class="team-overlay"></div>
                                        <img src="<?php echo $member['image']; ?>" alt="Tahir's profile image">
                                    </div>
                                    <hr>
                                    <div class="member-info">
                                        <h5 class="mb-0"><i class="fal fa-user"></i> <?php echo $member['name']; ?></h5>
                                        <p class="mb-0"><i class="fal fa-briefcase"></i> <?php echo $member['designation']; ?></p>
                                        <p class="mb-0"><i class="fal fa-code"></i> <?php echo $member['skill']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Col-md-3 -->
                    <?php
                        }
                    ?>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- End Container Fluid -->
    </section>
    <!-- End Page Section -->

<?php
    include('components/footer.php');
    include('components/footer_scripts.php');
?>