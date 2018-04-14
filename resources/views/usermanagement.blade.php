@extends('layouts.app')
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
@section('content')
<h1>User management</h1>
<div id="usermanagement">
    <table>
  <tr>
    <th>name</th>
    <th>email</th>
  </tr>
  <tr>
    <td>apez</td>
    <td>apez@mail.com</td>
  </tr>
  <tr>
    <td>apez 2</td>
    <td>apez2@mail.com</td>
  </tr>
</table>
</div>
@endsection
