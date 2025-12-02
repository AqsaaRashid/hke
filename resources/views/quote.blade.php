@extends('components.layout')
@section('content')
    

      <div class="quote-box">
    <h3 class="quote-title">REQUEST QUOTE</h3>

    <form>
        <div class="quote-row">
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
        </div>

        <input type="text" placeholder="Subject" class="quote-input">

        <textarea placeholder="Message"></textarea>

        <button class="quotee-btn">REQUEST A QUOTE</button>
    </form>
</div>





<style>

    .quote-box {
    width: 320px;
    background: #ffffff;
    padding: 20px;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    font-family: 'Segoe UI', sans-serif;
}

.quote-title {
    font-size: 18px;
    font-weight: 700;
    color: #182c46;
    margin-bottom: 15px;
}

.quote-row {
    display: flex;
    gap: 10px;
    margin-bottom: 12px;
}

.quote-row input {
    width: 100%;
    padding: 12px;
    background: #f7f7f7;
    border: 1px solid #eee;
    border-radius: 4px;
    font-size: 14px;
}

.quote-input {
    width: 100%;
    padding: 12px;
    background: #f7f7f7;
    border: 1px solid #eee;
    border-radius: 4px;
    font-size: 14px;
    margin-bottom: 12px;
}

textarea {
    width: 100%;
    height: 110px;
    padding: 12px;
    background: #f7f7f7;
    border: 1px solid #eee;
    border-radius: 4px;
    font-size: 14px;
    resize: none;
    margin-bottom: 15px;
}

.quotee-btn {
    width: 100%;
    padding: 12px;
    font-size: 14px;
    font-weight: 600;
    background: #1d5a99;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    letter-spacing: 0.5px;
}

.quotee-btn:hover {
    opacity: 0.9;
}

    </style>

   
 
       
@endsection