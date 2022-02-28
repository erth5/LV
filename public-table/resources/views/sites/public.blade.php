@extends('layout')

@section('title', 'Table')
@section('content')

    <div class="center">
        <h1>This is the public Table number one</h1>
    </div>

<!-- Project tabeler static -->
<input type="submit" value="Submit" name="submit_button">


<table>
        <tr>
            <th>Date</th>
            <th>editor(auto)</th>
            <th>Word1</th>
            <th>Word2</th>
            <th>Word3</th>
        </tr>

        @foreach($data as $column)
            <tr>
                <td><form>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->timestamps}}">
                    </form></td>
                <td><form>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->editor}}">
                    </form></td>
                <td><form>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->word1}}">
                    </form></td>
                <td><form>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->word2}}">
                    </form></td>
                <td><form>
                        <input type="text" maxlength="255" autocomplete="on" placeholder="{{$column->word3}}">
                    </form></td>
            </tr>
        @endforeach
</table>
<input type="submit" value="Submit" name="submit_button">

@endsection

