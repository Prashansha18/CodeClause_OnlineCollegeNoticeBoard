<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Create Notice</title>
        </head>
    <body>
        <br>
        <center><h3>Send Notice form</h3></center>
        <br>
        <div>
            <form action="" method="post">
                <div class="form-group">
                <label>To whom::</label>
                  <select class="form-control" name="to_whom">
                    <option>To all</option>
                    <option>To class 8</option>
                    <option>To class 9</option>
                    <option>To class 10</option>
                    <option>To class 11</option>
                    <option>To class 12</option>

                  </select>
                </div>
                <div class="form-group">
                    <label>Post Date:</label>
                    <input type="date" class="form-control" name="post_date">
                </div>
                <div class="form-group">
                <label>Subject:</label>
                <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
                </div>
                <div class="form-group">
                    <label>Message:</label>
                    <textarea name="message" rows="8" cols="80" class="form-control" placeholder="Type your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="send_notice">Send Notice</button>
                
            </form>
        </div>
    </body>
</html>
