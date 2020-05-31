package com.tutorialkart.anotheractivity

import android.content.Intent
import android.support.v7.app.AppCompatActivity
import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import kotlinx.android.synthetic.main.activity_main.*

class MainActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        btnStartAnotherActivity.setOnClickListener {
            val intent = Intent(this, AnotherActivity::class.java)
            // start your next activity
            startActivity(intent)
        }

    }
}