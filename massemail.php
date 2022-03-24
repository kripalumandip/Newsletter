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

    <title>Send Mass Email </title>
  </head>
  <body>
    <div class="container">
      <h3 class="mt-3">Send Mass Email</h3>
      <form action="send-email.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Subject of Email</label
          >
          <input
            name="subject"
            type="text"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            required
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Body of Email</label
          >
          <div class="form-floating">
            <textarea
              name = "body"
              rows="10"
              style="height: 100%"
              class="form-control"
              placeholder="Leave a comment here"
              id="floatingTextarea"
              height="200px"
              required
            ></textarea>
            <label for="floatingTextarea">Write your text here</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <h3 class="mt-5">
          Go back to sign up page
        </h3>
        <a href="index.php">
          <button
            type="submit"
            name="sign-up"
            value="sign-up"
            class="btn btn-primary"
          >
            Sign up
          </button>
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
