<?php
if ( isset( $_GET[ 'pixel' ] ) ) setcookie( 'pixel', $_GET[ 'pixel' ], time() + 60 * 60 * 24 * 30 );
$config = json_decode( file_get_contents( 'json/config.json' ), true );
$lang = json_decode( file_get_contents( 'json/lang.json' ), true );
//$title = strtoupper( substr( $_SERVER[ 'HTTP_HOST' ], 2, 3 ) ) . ' ' . $lang[ 'blog' ];
$posts = json_decode( file_get_contents( 'json/posts.json' ), true );
$names = [ 'James', 'John', 'Robert', 'Michael', 'William', 'David', 'Richard', 'Joseph', 'Thomas', 'Charles', 'Christopher', 'Daniel', 'Matthew', 'Anthony', 'Donald', 'Mark', 'Paul', 'Steven', 'Andrew', 'Kenneth', 'Joshua', 'George', 'Kevin', 'Brian', 'Edward', 'Ronald', 'Timothy', 'Jason', 'Jeffrey', 'Ryan', 'Jacob', 'Gary', 'Nicholas', 'Eric', 'Stephen', 'Jonathan', 'Larry', 'Justin', 'Scott', 'Brandon', 'Frank', 'Benjamin', 'Gregory', 'Samuel', 'Raymond', 'Patrick', 'Alexander', 'Jack', 'Dennis', 'Jerry', 'Tyler', 'Aaron', 'Jose', 'Henry', 'Douglas', 'Adam', 'Peter', 'Nathan', 'Zachary', 'Walter', 'Kyle', 'Harold', 'Carl', 'Jeremy', 'Keith', 'Roger', 'Gerald', 'Ethan', 'Arthur', 'Terry', 'Christian', 'Sean', 'Lawrence', 'Austin', 'Joe', 'Noah', 'Jesse', 'Albert', 'Bryan', 'Billy', 'Bruce', 'Willie', 'Jordan', 'Dylan', 'Alan', 'Ralph', 'Gabriel', 'Roy', 'Juan', 'Wayne', 'Eugene', 'Logan', 'Randy', 'Louis', 'Russell', 'Vincent', 'Philip', 'Bobby', 'Johnny', 'Bradley' ];
$name = $names[ rand( 0, count( $names ) - 1 ) ];
$page = isset($_GET[ 'page' ]) ? $_GET[ 'page' ] : 1;
?>
<!DOCTYPE html>
<html lang="<?= $config['lang']?>">

<head>

    <meta charset="utf-8">
    <title><?= $config['title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all">
    <meta name="referrer" content="origin-when-cross-origin">
    <meta name="description" content=""/>
    <link rel="canonical" href=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?= $config['title'] ?>"/>
    <meta property="og:description" content=""/>
    <!-- Bootstrap core CSS -->
    <link href="css/<?= $config[ 'theme' ] ?>.css" rel="stylesheet">
</head>

<body style="padding-top: 80px;">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><?= $config['title'] ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/"><?= $lang[ 'blog' ] ?>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><?= $lang[ 'contact' ] ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <?php if ( !isset( $_GET[ 'postid' ] )): ?>
            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4"><?= $lang[ 'recentPosts' ] ?></h1>
                <?php $i = 0; ?>
                <?php while ( isset( $posts[ $i ] ) ): ?>
                    <?php $post = $posts[ $i ]; ?>
                    <!-- Blog Post -->
                    <div class="card mb-4">
                        <?php if ( file_exists(  'image/'.$post[ 'img' ] ) ): ?>
                            <div style="height:200px; background-image: url(image/<?= $post[ 'img' ] ?>); background-size: cover; background-position: center;">
                                &nbsp;
                            </div>
                        <?php endif; ?>
                        <!--                    <img class="card-img-top" src="-->
                        <? //= $post[ 'id' ] ?><!--.jpg" alt="Card image cap">-->
                        <div class="card-body">
                            <h2 class="card-title"><?= $post[ 'title' ] ?></h2>
                            <?php if ( $post[ 'title' ] ): ?>
                                <p class="card-text"><?= $post[ 'short' ] ?></p>
                            <?php endif; ?>
                            <a href="/w.php?postid=<?= $post[ 'id' ] ?>" class="btn btn-primary"><?= $lang[ 'readMore' ] ?>
                                &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            <?= $lang[ 'published' ] ?> <?php echo date( 'm/d/Y H:i:s', time() - rand( 60 * 60 * 24, 60 * 60 * 24 * 7 ) ); ?>
                            by
                            <a href="#"><?= $name ?></a>
                        </div>
                    </div>
                    <?php $i++ ?>
                <?php endwhile; ?>

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $page + 1; ?>">&larr; <?= $lang[ 'prev' ] ?></a>
                    </li>
                    <?php if ( $page != 1 ): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo $page - 1; ?>"><?= $lang[ 'next' ] ?> &rarr;</a>
                        </li>
                    <?php else: ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="#"><?= $lang[ 'next' ] ?> &rarr;</a>
                        </li>
                    <?php endif; ?>
                </ul>

            </div>
        <?php else: ?>
            <div class="col-md-8">
                <h1 class="my-4"><?= $posts[$_GET['postid']]['title'] ?></h1>
                <div class="card">
                    <div class="card-body">
                        <img src="image/<?= $posts[$_GET['postid']]['img'] ?>">
                        <hr>
                        <?= $posts[$_GET['postid']]['text'] ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header"><?= $lang[ 'search' ] ?></h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="<?= $lang[ 'searchInput' ] ?>">
                        <span class="input-group-btn">
                <button class="btn btn-secondary" type="button"><?= $lang[ 'searchSubmit' ] ?></button>
              </span>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header"><?= $lang[ 'recentPosts' ] ?></h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled mb-0">
                                <?php $i = 0; ?>
                                <?php while ( isset( $posts[ $i ] ) ): ?>
                                    <?php $post = $posts[ $i ]; ?>
                                    <li><a href="/w.php?postid=<?= $post[ 'id' ] ?>"><?= $post[ 'title' ] ?></a></li>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <?php
        $lang = ($config['lang'] == 'ru') ? 'ru' : 'en';
        ?>
        <p class="m-0 text-center text-white">Copyright &copy; <?= $config['title'] ?>  <?= date('Y')?> | <a href="privacy/policy_<?=$lang?>.php" class="text-white">Policy</a></p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.js" data-cfasync="false"></script>

<script>
    window.addEventListener('load', function(){
        window.cookieconsent.initialise({
            revokeBtn: "<div class='cc-revoke'></div>",
            type: "opt-in",
            position: "bottom-left",
            theme: "classic",
            palette: {
                popup: {
                    background: "#000",
                    text: "#fff"
                },
                button: {
                    background: "#fd0",
                    text: "#000"
                }
            },
            content: {
                link: "About consent form",
                href: "https://2gdpr.com/cookies"
            },
            onInitialise: function(status) {
                if(status == cookieconsent.status.allow) myScripts();
            },
            onStatusChange: function(status) {
                if (this.hasConsented()) myScripts();
            }
        })
    });

    function myScripts() {

    }
</script>

<!-- Facebook сф6 Pixel Code -->
<?php if ( isset( $_GET[ 'pixel' ] ) ): ?>
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo $_GET[ 'pixel' ] ?>');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=<?php echo $_GET[ 'pixel' ] ?>&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
<?php endif ?>



</body>

</html>
