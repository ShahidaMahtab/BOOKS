  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Book Information</title>
  <style>
    /*
  =============== 
  Fonts
  ===============
  */
  @import url("https://fonts.googleapis.com/css?family=Open+Sans|Roboto:400,700&display=swap");
  /*
  =============== 
  Variables
  ===============
  */
  :root{
  /* primary/main color */ 
  --clr-primary-1:rgb(247, 240, 240);
  --clr-primary-5:#110836;
  /* darkest grey - used for headings */
    --clr-grey-1: hsl(208, 46%, 7%);
    --clr-white: rgb(255, 253, 253);
    --ff-primary: "Roboto", sans-serif;
    --ff-secondary: "Open Sans", sans-serif;
    --transition: all 0.3s linear;
    --spacing: 0.2rem;
    --radius: 0.5rem;
    --light-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    --dark-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    --max-width: 1170px;
  }
  /*
  =============== 
  Global Styles
  ===============
  */
    *,
  ::after,
  ::before {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: var(--ff-secondary);
    background: var(--clr-primary-1);
    color: var(--clr-grey-1);
    /* color: #dddddd; */
    line-height: 1.5;
    font-size: 0.875rem;
  }
  ul {
    list-style-type: none;
  }
  a {
    text-decoration: none;
  }

  .btn{
    text-transform: uppercase;
    cursor: pointer;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
    border-radius: var(--radius);
  }

  .btn-primary{
    background:#031d33;
  }

  .btn-danger{
    background:#dd0e0a;
  }
  .btn-back{
    background:var(--clr-primary-5);
    color: white;
  }
  .btn-c,
  .btn-create{
    margin: 18px 0 20px 0;
    padding: 10px;
    font-size: 1rem;
    background:var(--clr-primary-5);
    color: white;
  }
  /* *********************************header**************************** */
  .header{
    margin: 20px 0 0 0;
    padding: 10px 0;
    color: var(--clr-primary-5);
    display: flex;
    flex-direction: row;
      justify-content: space-around;
    align-items: center;
  }
  .title {
      cursor: pointer;
  }
  .title-text {
    margin:10px 0 0 0;
      font-size: 40px;
      font-weight: 800;
      text-transform: uppercase;
  }
  .create,
  .edit{  
    font-size: 2.2rem;
  }
  /* **********************end of header**************************** */

  .section-center{
    display:flex; 
    flex-direction: column;
    justify-content: center;
    margin: 0 auto;
    padding: 25px;
    max-width: 1170px;
  }

  /********************table layout********************* */
  .content-table{
    table-layout: fixed;
  border-collapse: collapse;
  margin: 15px 10px 20px 10px;
  font-size:1.3em;
  min-width: 400px;
  border-radius:5px 5px 0 0;
  overflow: hidden;
  box-shadow: var(--dark-shadow);
  }
  .content-table thead tr{
    background:var(--clr-primary-5);
    color: #fff;
    text-align: left;
    font-weight: bold;
  }
  .content-table th,
  .content-table td{
  padding: 8px 20px;
  }
  .content-table tbody tr{
    border-bottom: 1px solid #e2dede;

  }
  .content-table tbody tr:nth-of-type(even){
    /* background:#f3f3f3; */  
    background: var(--clr-primary-1);

  }
  .content-table tbody tr:last-of-type{
    border-bottom:2px solid var(--clr-primary-5);
  }
  /* ************************end of table *********************************/

  /* **************************************form *****************************/
  td form{
    padding:0 important!;
    margin:0 important!;
  }
  .form-p{
    margin:0 auto 0 0;
    padding-left: 9rem;
  }
  .form-group{
    text-transform: uppercase;
    margin:10px 25px;
  }
  .form-group h3{
    color:black;
    font-size: 1.2em;
    font-weight: 600;
    text-align: left;
    text-transform: uppercase;
  }
  /* ********************************end of form************************************** */
  .submit{
  margin:20px 0 10px 22px;
  /* margin-left:20px; */
  }
  .alert{
    font-size: 1rem;
    font-style: italic;
  }
  </style>
  </head>
  <body>
    @yield('content')
  </body>
  </html>