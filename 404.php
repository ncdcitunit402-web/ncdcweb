<?php include("includes/header.php"); ?>

<style>
.notfound-wrapper{
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 40px;
    animation: fadeIn 1s ease-in-out;
}
.notfound-box{
    max-width: 600px;
    animation: slideUp 1s ease-out;
}
.notfound-box h1{
    font-size: 80px;
    color: #c0392b;
    margin-bottom: 10px;
    animation: bounce 1.5s infinite;
}
.notfound-box h2{
    font-size: 26px;
    margin-bottom: 15px;
}
.notfound-box p{
    font-size: 16px;
    color: #555;
    margin-bottom: 25px;
}
.notfound-box a{
    display: inline-block;
    padding: 10px 20px;
    background: #0066cc;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: 0.3s;
}
.notfound-box a:hover{
    background: #004999;
    transform: scale(1.05);
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to   { opacity: 1; }
}

@keyframes slideUp {
    from { transform: translateY(40px); opacity: 0; }
    to   { transform: translateY(0); opacity: 1; }
}

@keyframes bounce {
    0%,20%,50%,80%,100% { transform: translateY(0); }
    40% { transform: translateY(-20px); }
    60% { transform: translateY(-10px); }
}
</style>

<div class="notfound-wrapper">
    <div class="notfound-box">
        <h1>404</h1>
        <h2>Page Not Found</h2>
        <p>
            Sorry, the page you are looking for might have been removed,<br>
            had its name changed, or is temporarily unavailable.
        </p>
        <a href="/NCDC_MOHFW/">Go to Homepage</a>
    </div>
</div>

<?php include("includes/footer.php"); ?>