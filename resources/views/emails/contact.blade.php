<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Email</title>
</head>
<body>
    <div class="container" style="width: 100%; color: #797979" >

        <h1 style="text-align: center; font-weight: 400; color: #191dff">FBA CONTACT FORM</h1>
        <hr>
        <div>
            <h3><span style="font-weight: 700">Name:</span> {!! $data['name'] !!} </h3>
        </div>
        <div>
            <h3>Email: {!! $data['email'] !!}</h3>
        </div>
        <div>
            <h3>Company: {!! $data['company']  !!}</h3>
        </div>
        <div>
            <h3>Phone: {!! $data['phone']  !!}</h3>
        </div>
        <hr>

       <div style="margin: 0 auto; border: 1px solid #cccccc; padding: 1%; text-align: justify; color: #8c8c8c">
           <p> {!! $data['message']  !!}</p>
       </div>

        <hr>


    </div>

</body>
</html>