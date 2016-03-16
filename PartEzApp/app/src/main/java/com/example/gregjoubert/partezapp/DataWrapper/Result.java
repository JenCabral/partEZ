package com.example.gregjoubert.partezapp.DataWrapper;
import com.google.gson.annotations.SerializedName;
/**
 * Created by gregjoubert on 2016-03-16.
 */

public class Result {

    public String uid;
    public String sTime;
    public String eTime;
    public String location;
    public String description;
    public String name;
    public String date;
    public String eid;
    @SerializedName("created_at")
    public String createdAt;
    @SerializedName("updated_at")
    public String updatedAt;

    @Override
    public String toString()
    {
        return "Result{" +
                "uid='" + uid + '\'' +
                ", sTime='" + sTime + '\'' +
                ", eTime='" + eTime + '\'' +
                ", location='" + location + '\'' +
                ", description='" + description + '\'' +
                ", name='" + name + '\'' +
                ", date='" + date + '\'' +
                ", eid='" + eid + '\'' +
                ", createdAt='" + createdAt + '\'' +
                ", updatedAt='" + updatedAt + '\'' +
                '}';
    }


}
