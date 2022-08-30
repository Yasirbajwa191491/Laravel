<x-navbar />
<h1>Add data</h1>
<form action="/data" method="POST">
    @csrf
    <input type="text" name="name" id="name"/>
    <input type="email" name="email" id="email">
    <button>submit</button>
</form>