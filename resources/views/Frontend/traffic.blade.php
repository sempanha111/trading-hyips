@extends('Frontend/layout.app')

@section('content')
@include('Frontend/layout/header')

<div class="global_wrap">
    <div class="clearall"></div>
    <div class="middle_wrap clearfix">
        <div class="wrap">
            <div class="sidebar" id="lsidebar">
                @include('Frontend/layout/lsidebar')
            </div>
            <!-- content -->
            <div class="content clearfix">


                @include('Frontend/layout/program', ['program' => $program, 'detail' => $detail])

                <div class="clearall"></div>

                <div class="details traffic" bis_skin_checked="1">
                    <table class="list">
                        <tbody>
                            <tr>
                                <th>Date</th>
                                <th>Hosts</th>
                                <th>Hits</th>
                            </tr>
                            <tr class="row1">
                                <td>Oct 1st, 2024</td>
                                <td align="center">1
                                    <span class="neg">↓ 18</span>
                                </td>
                                <td align="center">1
                                    <span class="neg">↓ 18</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 30th, 2024</td>
                                <td align="center">19
                                    <span class="pos">↑ 13</span>
                                </td>
                                <td align="center">19
                                    <span class="pos">↑ 13</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 29th, 2024</td>
                                <td align="center">6
                                    <span class="neg">↓ 10</span>
                                </td>
                                <td align="center">6
                                    <span class="neg">↓ 10</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 28th, 2024</td>
                                <td align="center">16
                                    <span class="pos">↑ 9</span>
                                </td>
                                <td align="center">16
                                    <span class="pos">↑ 9</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 27th, 2024</td>
                                <td align="center">7
                                    <span class="neg">↓ 14</span>
                                </td>
                                <td align="center">7
                                    <span class="neg">↓ 14</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 26th, 2024</td>
                                <td align="center">21
                                    <span class="pos">↑ 13</span>
                                </td>
                                <td align="center">21
                                    <span class="pos">↑ 13</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 25th, 2024</td>
                                <td align="center">8
                                    <span class="pos">↑ 1</span>
                                </td>
                                <td align="center">8
                                    <span class="pos">↑ 1</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 24th, 2024</td>
                                <td align="center">7
                                    <span class="neg">↓ 4</span>
                                </td>
                                <td align="center">7
                                    <span class="neg">↓ 4</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 23rd, 2024</td>
                                <td align="center">11
                                    <span class="pos">↑ 2</span>
                                </td>
                                <td align="center">11
                                    <span class="pos">↑ 2</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 22nd, 2024</td>
                                <td align="center">9
                                    <span class="pos">↑ 2</span>
                                </td>
                                <td align="center">9
                                    <span class="pos">↑ 2</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 21st, 2024</td>
                                <td align="center">7
                                    <span class="neg">↓ 10</span>
                                </td>
                                <td align="center">7
                                    <span class="neg">↓ 10</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 20th, 2024</td>
                                <td align="center">17
                                    <span class="pos">↑ 2</span>
                                </td>
                                <td align="center">17
                                    <span class="pos">↑ 2</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 19th, 2024</td>
                                <td align="center">15
                                    <span class="neg">↓ 2</span>
                                </td>
                                <td align="center">15
                                    <span class="neg">↓ 2</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 18th, 2024</td>
                                <td align="center">17
                                    <span class="pos">↑ 5</span>
                                </td>
                                <td align="center">17
                                    <span class="pos">↑ 5</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 17th, 2024</td>
                                <td align="center">12
                                    <span class="neg">↓ 5</span>
                                </td>
                                <td align="center">12
                                    <span class="neg">↓ 5</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 16th, 2024</td>
                                <td align="center">17
                                </td>
                                <td align="center">17
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 15th, 2024</td>
                                <td align="center">17
                                    <span class="pos">↑ 8</span>
                                </td>
                                <td align="center">17
                                    <span class="pos">↑ 8</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 14th, 2024</td>
                                <td align="center">9
                                    <span class="pos">↑ 4</span>
                                </td>
                                <td align="center">9
                                    <span class="pos">↑ 4</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 13th, 2024</td>
                                <td align="center">5
                                    <span class="neg">↓ 7</span>
                                </td>
                                <td align="center">5
                                    <span class="neg">↓ 7</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 12th, 2024</td>
                                <td align="center">12
                                    <span class="neg">↓ 5</span>
                                </td>
                                <td align="center">12
                                    <span class="neg">↓ 5</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 11th, 2024</td>
                                <td align="center">17
                                    <span class="pos">↑ 3</span>
                                </td>
                                <td align="center">17
                                    <span class="pos">↑ 3</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 10th, 2024</td>
                                <td align="center">14
                                    <span class="neg">↓ 12</span>
                                </td>
                                <td align="center">14
                                    <span class="neg">↓ 12</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 9th, 2024</td>
                                <td align="center">26
                                    <span class="pos">↑ 14</span>
                                </td>
                                <td align="center">26
                                    <span class="pos">↑ 14</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 8th, 2024</td>
                                <td align="center">12
                                    <span class="neg">↓ 2</span>
                                </td>
                                <td align="center">12
                                    <span class="neg">↓ 2</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 7th, 2024</td>
                                <td align="center">14
                                    <span class="pos">↑ 5</span>
                                </td>
                                <td align="center">14
                                    <span class="pos">↑ 5</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 6th, 2024</td>
                                <td align="center">9
                                    <span class="neg">↓ 3</span>
                                </td>
                                <td align="center">9
                                    <span class="neg">↓ 3</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 5th, 2024</td>
                                <td align="center">12
                                    <span class="neg">↓ 1</span>
                                </td>
                                <td align="center">12
                                    <span class="neg">↓ 1</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 4th, 2024</td>
                                <td align="center">13
                                    <span class="neg">↓ 1</span>
                                </td>
                                <td align="center">13
                                    <span class="neg">↓ 1</span>
                                </td>
                            </tr>
                            <tr class="row1">
                                <td>Sep 3rd, 2024</td>
                                <td align="center">14
                                    <span class="neg">↓ 5</span>
                                </td>
                                <td align="center">14
                                    <span class="neg">↓ 5</span>
                                </td>
                            </tr>
                            <tr class="row2">
                                <td>Sep 2nd, 2024</td>
                                <td align="center">19
                                    <span class="pos">↑ 10</span>
                                </td>
                                <td align="center">19
                                    <span class="pos">↑ 10</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- content -->
            <div class="sidebar" id="rsidebar">
                @include('Frontend/layout/rsidebar')
            </div>
        </div>
    </div>
    @endsection
