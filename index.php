<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Newsletter signup</title>
  </head>
  <body>
    <!-- Heading -->
    <div class="container">
      <div class="mb-4">
        <h1>Subscribe to our news below to receive updates in your email</h1>
      </div>
      <!-- Form  -->

      <form action="Newsletter-signup.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">First Name</label>
          <input
            type="text"
            class="form-control"
            name="firstname"
            id="firstname"
            aria-describedby="emailHelp"
            required
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Last Name</label>
          <input
            type="text"
            class="form-control"
            name="lastname"
            id="lastname"
            aria-describedby="emailHelp"
            required
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Email address</label
          >
          <input
            type="email"
            class="form-control"
            name="email"
            id="email"
            aria-describedby="emailHelp"
            required
          />
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>
        <button
          type="submit"
          name="submit"
          value="Submit"
          class="btn btn-primary"
        >
          Subscribe
        </button>
      </form>
      <h3 class="mt-5">Other options</h3>
      <a href="massemail.php">
        <button
          type="submit"
          name="send-mail"
          value="send-mail"
          class="btn btn-primary mb-3"
        >
          Send mass email as admin
        </button> </a
      ><br />
      <a href="unsubscribe.php">
        <button
          type="submit"
          name="send-mail"
          value="send-mail"
          class="btn btn-primary"
        >
          Unsubscribe
        </button>
      </a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
