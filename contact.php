<?php
$config = json_decode( file_get_contents( 'json/config.json' ), true );
$lang = json_decode( file_get_contents( 'json/lang.json' ), true );
$title = strtoupper( substr( $_SERVER[ 'HTTP_HOST' ], 2, 3 ) ) . ' ' . $lang[ 'blog' ];
$posts = json_decode( file_get_contents( 'json/posts.json' ), true );
$names = [ 'James', 'John', 'Robert', 'Michael', 'William', 'David', 'Richard', 'Joseph', 'Thomas', 'Charles', 'Christopher', 'Daniel', 'Matthew', 'Anthony', 'Donald', 'Mark', 'Paul', 'Steven', 'Andrew', 'Kenneth', 'Joshua', 'George', 'Kevin', 'Brian', 'Edward', 'Ronald', 'Timothy', 'Jason', 'Jeffrey', 'Ryan', 'Jacob', 'Gary', 'Nicholas', 'Eric', 'Stephen', 'Jonathan', 'Larry', 'Justin', 'Scott', 'Brandon', 'Frank', 'Benjamin', 'Gregory', 'Samuel', 'Raymond', 'Patrick', 'Alexander', 'Jack', 'Dennis', 'Jerry', 'Tyler', 'Aaron', 'Jose', 'Henry', 'Douglas', 'Adam', 'Peter', 'Nathan', 'Zachary', 'Walter', 'Kyle', 'Harold', 'Carl', 'Jeremy', 'Keith', 'Roger', 'Gerald', 'Ethan', 'Arthur', 'Terry', 'Christian', 'Sean', 'Lawrence', 'Austin', 'Joe', 'Noah', 'Jesse', 'Albert', 'Bryan', 'Billy', 'Bruce', 'Willie', 'Jordan', 'Dylan', 'Alan', 'Ralph', 'Gabriel', 'Roy', 'Juan', 'Wayne', 'Eugene', 'Logan', 'Randy', 'Louis', 'Russell', 'Vincent', 'Philip', 'Bobby', 'Johnny', 'Bradley' ];
$name = $names[ rand( 0, count( $names ) - 1 ) ];
$page = isset($_GET[ 'page' ]) ? $_GET[ 'page' ] : 1;


$creo = [];

$files = array_diff(scandir('image'), array('..', '.'));
foreach ( $files as $file ) {
    $creo[] = $file;
}


?>
<!DOCTYPE html>
<html lang="<?= $config['lang']?>">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $config['title'] ?> | <?= $lang[ 'contant' ] ?></title>

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
                <li class="nav-item">
                    <a class="nav-link" href="/"><?= $lang[ 'blog' ] ?>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php"><?= $lang[ 'contact' ] ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <!-- Blog Entries Column -->
        <?php if ( !isset( $_POST[ 'proccess' ] ) ): ?>

            <div class="col-md-8 mt-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3><?= $lang[ 'contact' ] ?></h3>
                    </div>
                    <form method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 mb-4">
                                    <input class="form-control" type="text" name="name"
                                           placeholder="<?= $lang[ 'name' ] ?>">
                                </div>

                                <div class="col-6 mb-4">
                                    <input class="form-control" type="text" name="email" placeholder="Email">
                                </div>

                                <div class="col-12 mb-4">
                            <textarea rows="6" class="form-control" type="text" name="message"
                                      placeholder="<?= $lang[ 'message' ] ?>"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-primary" name="proccess"
                                            value="1"><?= $lang[ 'send' ] ?></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        <?php else: ?>
            <div class="col-md-8 mt-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3><?= $lang[ 'contact' ] ?></h3>
                    </div>
                    <form method="post">
                        <div class="card-body">
                            <p><?= $lang[ 'success' ] ?></p>
                        </div>
                    </form>
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
                                    <li><a href="?postid=<?= $post[ 'id' ] ?>"><?= $post[ 'title' ] ?></a></li>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php if ( $creo ): ?>
                <div class="card my-4">
                    <h5 class="card-header"><?= $lang[ 'images' ] ?></h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php foreach ( $creo as $c ): ?>
                                    <div class="col-12">
                                        <img src="/image/<?= $c ?>" style="width:100%; height:auto;">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>


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

<!-- Facebook ????6 Pixel Code -->
<?php if ( isset( $_COOKIE[ 'pixel' ] ) && isset( $_POST[ 'proccess' ] ) ): ?>
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
        fbq('init', '<?php echo $_COOKIE[ 'pixel' ] ?>');
        fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=<?php echo $_COOKIE[ 'pixel' ] ?>&ev=Lead&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
<?php endif ?>

</body>

</html>
