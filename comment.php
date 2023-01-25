<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Commenting System</title>
  <meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/png" href="http://www.favicon.cc/logo3d/430212.png"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<h1>Commenting System</h1>
<style type="text/css" scoped>

  /* ---------->>> RESETS <<<-----------*/

  * {
    outline: none;
  }

  html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    vertical-align: baseline;
    outline: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
  }

  a {
    text-decoration: none;
  }

  ol, ul {
    list-style: none;
  }

  /* ---------->>> COMMENTING SYSTEM <<<-----------*/

  /**************************************
    comments container & commons
  **************************************/
  #comments-container {
    display: block;
    width: auto;
    background: #fff;
    padding: 14px 20px;

    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;

    -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);

    font-size: 62.5%;
    line-height: 1;
    font-family: Arial, sans-serif;
  }

  #comments {
    display: block;
  }

  /**************************************
    new comment form
  **************************************/
  #comments .comment, #comment--new {
    display: block;
    position: relative;
    border-top: 1px solid #ddd;
    padding-left: 65px;
  }

  #comment__form {
    margin: 10px;
  }

  #comment--send {
    position: absolute;
    bottom: 0;
    right: 0;
    background: #f3f3f3;
    border: 0 none;
    border-radius: 3px;
    -webkit-box-shadow: 1px 1px 2px rgba(0, 0, 0, 1);
    -moz-box-shadow: 1px 1px 2px rgba(0, 0, 0, 1);
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 1);
  }

  #comment--send:active {
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.44);
  }

  /**************************************
    user avatar & link
  **************************************/
  .avatar {
    position: absolute;
    top: 8px;
    left: 0;
  }

  .avatar__img {
    border: 0;
    max-width: 100%;

    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.44);
    -moz-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.44);
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.44);

    -webkit-transition: all 0.4s linear;
    -moz-transition: all 0.4s linear;
    -o-transition: all 0.4s linear;
    transition: all 0.4s linear;
  }

  /**************************************
    existing comments
  **************************************/
  #comment__textarea {
    resize: none;
    border: none;
    width: 100%;
  }

  #comments .comment__content {
    font-family: Arial, Geneva, Verdana, sans-serif;
    font-size: 1.3em;
    line-height: 1.42em;
    margin-bottom: 12px;
    font-weight: normal;
    color: #656565;
    padding: 8px 3px 12px;
  }

  #comments .comment .user__link {
    color: #896dc6;
  }

  #comments .comment a:hover {
    text-decoration: underline;
  }

  #comments .comment__pub-date {
    display: inline-block;
    color: #989696;
  }

  /**************************************
    comments actions (report, like, reply)
  **************************************/
  #comments .comment__action {
    color: #b7b7b7;
    text-transform: capitalize;
  }

  #comments .comment__action:hover {
    color: #7f7f7f;
  }

  #comments .comment__action--report-abuse {
    position: absolute;
    top: 8px;
    right: 0;
  }

  #comments .comment__action--footer {
    position: absolute;
    right: 0;
  }
</style>

<div id="comments-container">
  <section id="comment--new" class="comment">
    <div class="avatar comment__avatar">
        <span class="user">
          <img src="images/default.png" alt="Avatar" class="avatar__img">
        </span>
    </div>
    <form id="comment__form">
      <textarea id="comment__textarea" placeholder="Join the discussion…" cols="30" rows="4" maxlength="132"></textarea>
      <button type="submit" id="comment--send">Comment</button>
    </form>
  </section>
  <ul id="comments">
    <li class="comment">
      <div class="avatar">
        <a href="#">
          <img src="https://secure.gravatar.com/avatar/de764cb701641bd5ca3419fda6186edb?d=retro&s=55"
               alt="Ger photo avatar" class="avatar__img">
        </a>
      </div>
      <div class="comment__content">
        <header>
          <a href="#">
            <span class="user__link">Ger</span>
          </a>
          <span class="comment__pub-date"> - posted 1 week ago</span>
          <a href="#" title="report abuse" class="comment__action"><i
            class="fa fa-exclamation-triangle comment__action--report-abuse" aria-hidden="true"></i></a>
        </header>
        <p>
          Sed felis lorem, venenatis sed malesuada vitae, tempor vel turpis. Mauris in dui velit, vitae mollis
          risus.
        </p>
        <footer class="comment__action--footer">
          <a href="#" title="like" class="comment__action">like</a>
          <a href="#" title="reply" class="comment__action">reply</a>
        </footer>
      </div>
      <ul class="comment__replies">
        <li class="comment">
          <div class="avatar">
            <a href="#">
              <img src="https://www.phplivesupport.com/pics/icons/avatars/public/avatar_53.png"
                   alt="Eva photo avatar" class="avatar__img">
            </a>
          </div>
          <div class="comment__content">
            <header>
              <a href="#">
                <span class="user__link">Eva</span>
              </a>
              <span class="comment__pub-date"> - posted 1 week ago</span>
              <a href="#" title="report abuse" class="comment__action"><i
                class="fa fa-exclamation-triangle comment__action--report-abuse" aria-hidden="true"></i></a>
            </header>
            <p>
              Sed felis lorem, venenatis sed malesuada vitae, tempor vel turpis. Mauris in dui velit, vitae mollis
              risus.
            </p>
            <footer class="comment__action--footer">
              <a href="#" title="like" class="comment__action">like</a>
              <a href="#" title="reply" class="comment__action">reply</a>
            </footer>
          </div>
        </li>
        <li class="comment">
          <div class="avatar">
            <a href="#">
              <img src="http://numbersarelife.com/nal/wp-content/uploads/2012/10/youre-faking-55x55.jpg"
                   alt="Joe photo avatar" class="avatar__img">
            </a>
          </div>
          <div class="comment__content">
            <header>
              <a href="#">
                <span class="user__link">Joe</span>
              </a>
              <span class="comment__pub-date"> - posted 1 week ago</span>
              <a href="#" title="report abuse" class="comment__action"><i
                class="fa fa-exclamation-triangle comment__action--report-abuse" aria-hidden="true"></i></a>
            </header>
            <p>
              Sed felis lorem, venenatis sed malesuada vitae, tempor vel turpis. Mauris in dui velit, vitae mollis
              risus.
            </p>
            <footer class="comment__action--footer">
              <a href="#" title="like" class="comment__action">like</a>
              <a href="#" title="reply" class="comment__action">reply</a>
            </footer>
          </div>
        </li>
        <li class="comment">
          <div class="avatar">
            <a href="#">
              <img src="https://www.phplivesupport.com/pics/icons/avatars/public/avatar_53.png"
                   alt="Eva photo avatar" class="avatar__img">
            </a>
          </div>
          <div class="comment__content">
            <header>
              <a href="#">
                <span class="user__link">Eva</span>
              </a>
              <span class="comment__pub-date"> - posted 1 week ago</span>
              <a href="#" title="report abuse" class="comment__action"><i
                class="fa fa-exclamation-triangle comment__action--report-abuse" aria-hidden="true"></i></a>
            </header>
            <p>
              Sed felis lorem, venenatis sed malesuada vitae, tempor vel turpis. Mauris in dui velit, vitae mollis
              risus.
            </p>
            <footer class="comment__action--footer">
              <a href="#" title="like" class="comment__action">like</a>
              <a href="#" title="reply" class="comment__action">reply</a>
            </footer>
          </div>
        </li>
      </ul>
    </li>
    <li class="comment">
      <div class="avatar">
        <a href="#">
          <img src="https://www.phplivesupport.com/pics/icons/avatars/public/avatar_53.png" alt="Eva photo avatar"
               class="avatar__img">
        </a>
      </div>
      <div class="comment__content">
        <header>
          <a href="#">
            <span class="user__link">Eva</span>
          </a>
          <span class="comment__pub-date"> - posted 1 week ago</span>
          <a href="#" title="report abuse" class="comment__action"><i
            class="fa fa-exclamation-triangle comment__action--report-abuse" aria-hidden="true"></i></a>
        </header>
        <p>
          Sed felis lorem, venenatis sed malesuada vitae, tempor vel turpis. Mauris in dui velit, vitae mollis
          risus.
        </p>
        <footer class="comment__action--footer">
          <a href="#" title="like" class="comment__action">like</a>
          <a href="#" title="reply" class="comment__action">reply</a>
        </footer>
      </div>
    </li>
  </ul>
</div>

</body>
</html>