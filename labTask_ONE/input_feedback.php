<?php
/**
 * Created by PhpStorm.
 * User: Sabbir Ahmed Shourov
 * Date: 2/6/2018
 * Time: 5:41 PM
 */
?>
<?php
    include ('header.php');
?>
<html>
    <div align="center">
        <form>
            <table>
                <tr>
                    <td>
                        <h5>Name</h5>
                    </td>
                    <td>
                        <input type = "text" name = "firstName" placeHolder = "firstName"/>
                    </td>
                    <td>
                        <input type = "text" name = "middleName" placeHolder = "middleName"/>
                    </td>
                    <td>
                        <input type = "text" name = "lastName" placeHolder = "lastName"/>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <h5>Employee Hire Date</h5>
                    </td>
                    <td>
                        <input type = "date" name = "hireDate" placeHolder = "hireDate"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Employee's Title</h5>
                    </td>
                    <td>
                        <input type = "text" name = "title" placeHolder = "title"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Employee's Department</h5>
                    </td>
                    <td>
                        <select name="course">
                            <option value="option1">CSE</option>
                            <option value="option2">EEE</option>
                            <option value="option3">BBA</option>
                        </select>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <h5>Performation Evaluation</h5>
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td>name</td>
                                <td>very good</td>
                                <td>good</td>
                                <td>fair</td>
                                <td>poor</td>
                                <td>fair</td>
                            </tr>
                            <tr>
                                <td>attitude</td>
                                <td>
                                    <input type="radio" name="option6" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option6" value="option2" />
                                </td>
                                <td>
                                    <input type="radio" name="option6" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option6" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option6" value="option1"/>
                                </td>
                            </tr>
                            <tr>
                                <td>quality of work</td>
                                <td>
                                    <input type="radio" name="option1" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option1" value="option2" />
                                </td>
                                <td>
                                    <input type="radio" name="option1" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option1" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option1" value="option1"/>
                                </td>
                            </tr>
                            <tr>
                                <td>quantity of work</td>
                                <td>
                                    <input type="radio" name="option2" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option2" value="option2" />
                                </td>
                                <td>
                                    <input type="radio" name="option2" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option2" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option2" value="option1"/>
                                </td>
                            </tr>
                            <tr>
                                <td>attendance</td>
                                <td>
                                    <input type="radio" name="option3" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option3" value="option2" />
                                </td>
                                <td>
                                    <input type="radio" name="option3" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option3" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option3" value="option1"/>
                                </td>
                            </tr>
                            <tr>
                                <td>dependability</td>
                                <td>
                                    <input type="radio" name="option4" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option4" value="option2" />
                                </td>
                                <td>
                                    <input type="radio" name="option4" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option4" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option4" value="option1"/>
                                </td>
                            </tr>
                            <tr>
                                <td>work ethic</td>
                                <td>
                                    <input type="radio" name="option5" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option5" value="option2" />
                                </td>
                                <td>
                                    <input type="radio" name="option5" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option5" value="option1"/>
                                </td>
                                <td>
                                    <input type="radio" name="option5" value="option1"/>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <h5>Overall Performation</h5>
                    </td>
                    <td>
                        very good<input type="radio" name="option7" value="option1"/>
                        good<input type="radio" name="option7" value="option2" />
                        fair<input type="radio" name="option7" value="option1"/>
                        poor<input type="radio" name="option7" value="option2" />
                        very poor<input type="radio" name="option7" value="option1"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>
                            comment
                        </h5>
                    </td>
                    <td>
                        <input type="text" name="comment" placeholder="comment"/>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <h5>Supervisor Name</h5>
                    </td>
                    <td>
                        <input type = "text" name = "firstName" placeHolder = "firstName"/>
                    </td>
                    <td>
                        <input type = "text" name = "middleName" placeHolder = "middleName"/>
                    </td>
                    <td>
                        <input type = "text" name = "lastName" placeHolder = "lastName"/>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <h5>
                            signature
                        </h5>
                    </td>
                    <td>
                        <input type="text" name="signature" placeholder="signature"/>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <input type="reset" value="reset" />
                    </td>
                    <td>
                        <input type="submit" value="submit" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</html>
<?php
    include('footer.php');
?>
