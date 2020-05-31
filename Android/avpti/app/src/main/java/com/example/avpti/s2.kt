package com.example.avpti

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.Toast

class S2 : AppCompatActivity() {
    lateinit var btnLogin: Button
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_s2)

        btnLogin.setOnClickListener {
            Toast.makeText(this@S2,"login successfully",Toast.LENGTH_SHORT).show()

            val intent =  intent(this, S3::class.java)
            // start your next activity
            startActivity(intent)
        }

    }
}
