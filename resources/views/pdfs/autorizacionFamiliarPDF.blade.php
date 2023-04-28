<x-header />

<p>{{ $data['activity'] }}</p>
<p>{{ $data['organizer'] }}</p>
<p>{{ $data['execution_date'] }}</p>
<p>{{ $data['departure_time'] }}</p>
<p>{{ $data['goals'] }}</p>
<p>{{ $data['deadline'] }}</p>
<p>{{ $data['parents'] }}</p>
<p>{{ $data['student'] }}</p>
<p>{{ $data['course'] }}</p>
<p>{{ $data['authorization'] }}</p>

<x-footer />

<style>
    header {
        margin: 0
        position: fixed;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    footer {
        position: fixed;
        left: 0px;
        bottom: -50px;
        right: 0px;
        height: 40px;
        border-top: 1px solid #383232;
    }

    footer .page:after {
        content: counter(page);
    }

    footer table {
        width: 100%;
    }

    footer td {
        text-align: center;
        font-size: 10px;
    }

    footer span {
        color: blue;
    }

    ul li {
        display: inline;
    }
</style>